$(document).ready(() => {

    $.getPathOf = (name) => {
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results;
    }

    $.existUrlParam = (name) => {
        return $.getPathOf(name)[1] || 0;
    }

    $.getUrlParam = (name) => {
        return $.getPathOf(name)[0] || 0;
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
