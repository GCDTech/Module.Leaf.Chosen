rhubarb.vb.create('SelectizeLibraryViewBridge', function(parent) {
    return {
        selectize:null,
        attachEvents:function() {
            parent.attachEvents.call(this);

            var self = this,
                $selectize = $(this.viewNode).selectize(
                    {
                        options:[],
                        create:false,
                        load: function (query, callback) {
                            this.clearOptions();
                            this.renderCache = {};
                        },
                        loadThrottle:150,
                        labelField: 'name',
                        searchField: 'name',
                        allowEmptyOption: true,
                        plugins: ['remove_button']
                    }
                );

            this.selectize = $selectize[0].selectize;

            this.selectize.on('change', function(newValue) {
                self.setValue(newValue);
            });
        },
        populateSelectedItemsFromDom:function() {
            parent.populateSelectedItemsFromDom.call(this);

            this.setValue(this.selectize.getValue());
        },
        onReattached:function() {
            parent.onReattached.call(this);

            this.selectize.onSearchChange('uniqueSearchQueryOrElseCacheWillBeUsed');
        }
    };
}, window.rhubarb.viewBridgeClasses.DropDownViewBridge);
