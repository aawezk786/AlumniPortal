$(function() {
	var canvas = $("#c");
	var canvasHeight;
	var canvasWidth;
	var ctx;
	var dt = 0.1;

	var  c1 = "#ffc119";
	var  c2 = "#f2ec4e";
	var  c3 = "#b4d553";
	var  c4 = "#42c5e1";
	var  c5 = "#ef5852";
	var  b = "#000000";
	var  a = "#FF0000";

	var pointCollection;

	function init() {
		updateCanvasDimensions();

		var g = [
			new Point(-450, 180, 0.0, 50, c4),
			new Point(-375, 140, 0.0, 20, c5),
			new Point(-290, 140, 0.0, 50, c2),
			new Point(-210, 100, 0.0, 35, c3),
			new Point(-80, 220, 0.0, 80, c2),
			new Point(-180, 165, 0.0, 50, c4),
			new Point(-160, 50, 0.0, 30, c4),
			new Point(-90, 100, 0.0, 50, c5),
			new Point(20, 140, 0.0, 55, c4),
			new Point(-10, 50, 0.0, 30, c3),
			new Point(50, 60, 0.0, 20, c2),
			new Point(95, 150, 0.0, 15, c1),
			new Point(105, 95, 0.0, 30, c5),
			new Point(180, 160, 0.0, 60, c2),
			// new Point(160, 75, 0.0, 35, c3),
			new Point(200, 65, 0.0, 30, c4),
			new Point(250, 180, 0.0, 50, c3),
			new Point(255, 95, 0.0, 25, c5),
			new Point(305, 120, 0.0, 20, c1),
			new Point(450, 210, 0.0, 80, c2),
			new Point(370, 160, 0.0, 45, c4),

			// new Point(0, 0, 0.0, 1, a),
			// new Point(100, 0, 0.0, 1, a),
			// new Point(200, 0, 0.0, 1, b),
			// new Point(300, 0, 0.0, 1, a),
			// new Point(400, 0, 0.0, 1, b),
			// new Point(500, 0, 0.0, 1, a),
			// new Point(-100, 0, 0.0, 1, b),
			// new Point(-200, 0, 0.0, 1, a),
			// new Point(-300, 0, 0.0, 1, a),
			// new Point(-400, 0, 0.0, 1, a),
			// new Point(0, 100, 0.0, 1, a),


			];

		gLength = g.length;
		for (var i = 0; i < gLength; i++) {
			g[i].curPos.x = (canvasWidth/2 - 0) + g[i].curPos.x;
			g[i].curPos.y = (canvasHeight/2 - 0) + g[i].curPos.y;

			g[i].originalPos.x = (canvasWidth/2 - 0) + g[i].originalPos.x;
			g[i].originalPos.y = (canvasHeight/2 - 0) + g[i].originalPos.y;
		};

		pointCollection = new PointCollection();
		pointCollection.points = g;

		initEventListeners();
		timeout();
	};

	function initEventListeners() {
		$(window).bind('resize', updateCanvasDimensions).bind('mousemove', onMove);

		canvas.get(0).ontouchmove = function(e) {
			e.preventDefault();
			onTouchMove(e);
		};

		canvas.get(0).ontouchstart = function(e) {
			e.preventDefault();
		};
	};

	function updateCanvasDimensions() {
		// canvas.attr({height: $(window).height(), width: $(window).width()});
		canvas.attr({height: 650, width: $(window).width()});

		canvasWidth = canvas.width();
		canvasHeight = canvas.height();

		draw();
	};

	function onMove(e) {
		if (pointCollection)
			pointCollection.mousePos.set(e.pageX, e.pageY);
	};

	function onTouchMove(e) {
		if (pointCollection)
			pointCollection.mousePos.set(e.targetTouches[0].pageX, e.targetTouches[0].pageY);
	};

	function timeout() {
		draw();
		update();

		setTimeout(function() { timeout() }, 45);
	};

	function draw() {
		var tmpCanvas = canvas.get(0);

		if (tmpCanvas.getContext == null) {
			return;
		};

		ctx = tmpCanvas.getContext('2d');
		ctx.clearRect(0, 0, canvasWidth, canvasHeight);

		if (pointCollection)
			pointCollection.draw();
	};

	function update() {
		if (pointCollection)
			pointCollection.update();
	};

	function Vector(x, y, z) {
		this.x = x;
		this.y = y;
		this.z = z;

		this.addX = function(x) {
			this.x += x;
		};

		this.addY = function(y) {
			this.y += y;
		};

		this.addZ = function(z) {
			this.z += z;
		};

		this.set = function(x, y, z) {
			this.x = x;
			this.y = y;
			this.z = z;
		};
	};

	function PointCollection() {
		this.mousePos = new Vector(0, 0);
		this.points = new Array();

		this.newPoint = function(x, y, z) {
			var point = new Point(x, y, z);
			this.points.push(point);
			return point;
		};

		this.update = function() {
			var pointsLength = this.points.length;

			for (var i = 0; i < pointsLength; i++) {
				var point = this.points[i];

				if (point == null)
					continue;

				var dx = this.mousePos.x - point.curPos.x;
				var dy = this.mousePos.y - point.curPos.y;
				var dd = (dx * dx) + (dy * dy);
				var d = Math.sqrt(dd);

				if (d < 150) {
					point.targetPos.x = (this.mousePos.x < point.curPos.x) ? point.curPos.x - dx : point.curPos.x - dx;
					point.targetPos.y = (this.mousePos.y < point.curPos.y) ? point.curPos.y - dy : point.curPos.y - dy;
				} else {
					point.targetPos.x = point.originalPos.x;
					point.targetPos.y = point.originalPos.y;
				};

				point.update();
			};
		};

		this.draw = function() {
			var pointsLength = this.points.length;
			for (var i = 0; i < pointsLength; i++) {
				var point = this.points[i];

				if (point == null)
					continue;

				point.draw();
			};
		};
	};

	function Point(x, y, z, size, colour) {
		this.colour = colour;
		this.curPos = new Vector(x, y, z);
		this.friction = 0.8;
		this.originalPos = new Vector(x, y, z);
		this.radius = size;
		this.size = size;
		this.springStrength = 0.1;
		this.targetPos = new Vector(x, y, z);
		this.velocity = new Vector(0.0, 0.0, 0.0);

		this.update = function() {
			var dx = this.targetPos.x - this.curPos.x;
			var ax = dx * this.springStrength;
			this.velocity.x += ax;
			this.velocity.x *= this.friction;
			this.curPos.x += this.velocity.x;

			var dy = this.targetPos.y - this.curPos.y;
			var ay = dy * this.springStrength;
			this.velocity.y += ay;
			this.velocity.y *= this.friction;
			this.curPos.y += this.velocity.y;

			var dox = this.originalPos.x - this.curPos.x;
			var doy = this.originalPos.y - this.curPos.y;
			var dd = (dox * dox) + (doy * doy);
			var d = Math.sqrt(dd);

			this.targetPos.z = d/100 + 1;
			var dz = this.targetPos.z - this.curPos.z;
			var az = dz * this.springStrength;
			this.velocity.z += az;
			this.velocity.z *= this.friction;
			this.curPos.z += this.velocity.z;

			this.radius = this.size*this.curPos.z;
			if (this.radius < 1) this.radius = 1;
		};

		this.draw = function() {
			ctx.fillStyle = this.colour;
			ctx.globalAlpha = 0.95;//(Math.floor(Math.random() * 9) + 6)/10;
			ctx.beginPath();
			ctx.arc(this.curPos.x, this.curPos.y, this.radius, 0, Math.PI*2, true);
			ctx.fill();
			ctx.lineWidth = 3;
			ctx.strokeStyle = this.colour;
			ctx.stroke();

		};
	};

	init();
});