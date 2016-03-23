$(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover:true,
			navigation: false,
            direction: 'up',
            newsTickerInterval: 2000,
            onToDo: function () {
                //console.log(this);
            },
        });
    });