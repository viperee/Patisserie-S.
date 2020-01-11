jQuery(function () {
    $('.counter').counterUp({
        delay: 10,
        time: 1000,
        offset: 70,
        beginAt: 0,
        formatter: function (n) {
            return n.replace(/,/g, '.');
        }
    });
});
