rhubarb.vb.create('SelectizeAjaxDropDownViewBridge', function(parent) {
    return {
        attachEvents: function() {
            var self = this;
            this.currentRequest = null;
            this.searchTimeout = null;

            parent.attachEvents.call(this);

            this.chosen.parent().find('.chosen-search-input').keyup(function(event) {
                if (self.searchTimeout) {
                    clearTimeout(self.searchTimeout);
                }

                var value = this.value;

                self.searchTimeout = setTimeout(function() {
                    if (value) {
                        if (self.currentRequest) {
                            self.currentRequest.abort();
                        }

                        self.currentRequest = self.raiseServerEvent('searched', value, function (response) {
                            if (response && response instanceof Array && response.length) {
                                self.updateSelectionItems(response, value);
                            }

                            self.currentRequest = null;
                        });
                    }
                }, 150);
            });
        },
        updateSelectionItems: function(response, value) {
            var self = this;

            self.viewNode.innerHTML = '';

            $.map(response, function(item){
                $(self.viewNode).append('<option value="' + item.value + '">' + item.name + '</option>');
            });

            $(this.viewNode).trigger("chosen:updated");
            self.chosen.parent().find('.chosen-search-input').val(value);
        }
    };
}, window.rhubarb.viewBridgeClasses.SelectizeLibraryViewBridge);
