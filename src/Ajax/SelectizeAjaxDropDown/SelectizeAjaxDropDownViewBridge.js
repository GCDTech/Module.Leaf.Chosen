rhubarb.vb.create('SelectizeAjaxDropDownViewBridge', function(parent) {
    return {
        attachEvents: function() {
            parent.attachEvents.call(this);

            var self = this;

            this.currentRequest = null;

            this.selectize.settings.load = function(input, callback) {
                if (self.currentRequest) {
                    self.currentRequest.abort();
                }

                self.currentRequest = self.raiseServerEvent('searched', input, function (response) {
                    if (response && response instanceof Array && response.length) {
                        callback(response);
                    } else {
                        return false;
                    }

                    self.currentRequest = null;
                });
            };
        },
        reloadSelectize: function () {
            var selectize = this.selectize;
            selectize.clearOptions();
            selectize.load(function (callback) {
                callback([]);
            });
        }
    };
}, window.rhubarb.viewBridgeClasses.SelectizeLibraryViewBridge);
