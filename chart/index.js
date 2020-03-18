var barCount = 60;
var initialDateStr = '01 Apr 2017 00:00 Z';

var ctx = document.getElementById('chart').getContext('2d');
ctx.canvas.width = 1000;
ctx.canvas.height = 250;
var chart = new Chart(ctx, {
	type: 'candlestick',
	data: {
		datasets: [{
			label: 'CHRT - Chart.js Corporation',
			data: getRandomData(initialDateStr, barCount)
		}]
	},

});

var getRandomInt = function (max) {
	return Math.floor(Math.random() * Math.floor(max));
};

function randomNumber(min, max) {
	return Math.random() * (max - min) + min;
}

function randomBar(date, lastClose) {
	var open = randomNumber(lastClose * 0.95, lastClose * 1.05).toFixed(2);
	var close = randomNumber(open * 0.95, open * 1.05).toFixed(2);
	var high = randomNumber(Math.max(open, close), Math.max(open, close) * 1.1).toFixed(2);
	var low = randomNumber(Math.min(open, close) * 0.9, Math.min(open, close)).toFixed(2);
	
	return {
		t: date.valueOf(),
		o: open,
		h: high,
		l: low,
		c: close
	};

}




function getRandomData(dateStr, count) {
	var date = luxon.DateTime.fromRFC2822(dateStr);
	var data = [randomBar(date, 30)];

	while (data.length < count) {
		date = date.plus({ days: 1 });
		if (date.weekday <= 5) {
			data.push(randomBar(date, data[data.length - 1].c));
		}
	}
	console.log(date);
	// var data = [];
	// fetch('./stockprice.json')
	// 	.then(function (res) {
	// 		return res.json();
	// 	}).then(result => {

	// 		// console.log(result);
	// 		// var test=[];


	// 		var open = result.open;
	// 		var close = result.close;
	// 		var high = result.high;
	// 		var low = result.low;
	// 		var volume = result.volume;

	// 		open.forEach((element, index) => {
	// 			data[index] =
	// 			{
	// 				o: `${element}`,
	// 			};
	// 		});

	// 		close.forEach((element, index) => {
	// 			data[index].c = `${element}`;

	// 		});

	// 		high.forEach((element, index) => {
	// 			data[index].h = `${element}`;
	// 		});

	// 		low.forEach((element, index) => {
	// 			data[index].l = `${element}`;
	// 		});

	// 		// test = data;

	// 		console.log(data);
	// 	});

	// while (data.length < count) {
	// 	date = date.plus({ days: 1 });
	// 	if (date.weekday <= 5) {
	// 		data.push(randomBar(date, data[data.length - 1].c));
	// 	}
	// }


	

	return data;
}




