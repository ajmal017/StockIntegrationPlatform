fetch('./stockprice.json')
    .then(function (res) {
        return res.json();
    }).then(result => {

        // console.log(result);
        // var test=[];

        var data = [];
        var open = result.open;
        var close = result.close;
        var high = result.high;
        var low = result.low;
        var volume = result.volume;

        open.forEach((element, index) => {
            data[index] =
            {
                o: `${element}`,
            };
        });

        close.forEach((element, index) => {
            data[index].c = `${element}`;

        });

        high.forEach((element, index) => {
            data[index].h = `${element}`;
        });

        low.forEach((element, index) => {
            data[index].l = `${element}`;
        });

        // test = data;

        // console.log(data);
    });

