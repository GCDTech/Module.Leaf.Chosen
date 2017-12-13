rhubarb.vb.create('ChosenAjaxMultiSelectViewBridge', function(parent) {
    return {
        attachEvents: function() {
            var self = this;
            parent.attachEvents.call(this);

            this.chosen.parent().find('.chosen-search-input').keyup(function(event) {
                self.raiseServerEvent('searched', this.value, function(response) {
                    if (response) {
                        self.updateSelectionItems(response);
                    }
                });
            });
        },
        updateSelectionItems: function(response) {
            $.map(response, function(item){
                $('#'+id).append('<option value="' + item.value + '">' + item.caption + '</option>');
            });
            $("#"+id).trigger("chosen:updated");
        }
    };
}, window.rhubarb.viewBridgeClasses.ChosenLibraryViewBridge);
