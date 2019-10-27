$(document).ready(() => {
    $.existUrlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);

        console.table(results);
        return results[1] || 0;
    }

    $.getUrlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);

        console.table(results);
        return results[0] || 0;
    }

    if ($.existUrlParam('startdate') !== 0) {
        let startDate = $.getUrlParam('startdate').replace('?', '&');
        let endDate = $.getUrlParam('endate');

        $("a.page-link").each(function() {
            var $this = $(this);
            var _href = $this.attr("href");
            $this.attr("href", _href + startDate + endDate);
        });

    }

})
