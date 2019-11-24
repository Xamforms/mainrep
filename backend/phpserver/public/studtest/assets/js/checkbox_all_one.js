$(document).ready(function() {
    $(".all").on("change", function() {
        var groupId = $(this).data('id');
        $('.one[data-id="' + groupId + '"]').prop("checked", this.checked);
    });

    $(".one").on("change", function() {
        var groupId = $(this).data('id');
        var allChecked = $('.one[data-id="' + groupId + '"]:not(:checked)').length == 0;
        $('.all[data-id="' + groupId + '"]').prop("checked", allChecked);
    });
});
