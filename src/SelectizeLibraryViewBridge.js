rhubarb.vb.create('SelectizeLibraryViewBridge', function (parent) {
    return {
        selectize: null,
        attachEvents: function () {
            parent.attachEvents.call(this);

            var self = this,
                $selectize = $(this.viewNode).selectize(
                    {
                        options: [],
                        create: false,
                        load: function (query, callback) {
                            this.clearOptions();
                            this.renderCache = {};
                        },
                        loadThrottle: 150,
                        labelField: 'name',
                        searchField: 'name',
                        allowEmptyOption: true,
                        plugins: ['remove_button']
                    }
                );

            this.selectize = $selectize[0].selectize;
        },
        populateSelectedItemsFromDom: function () {
            parent.populateSelectedItemsFromDom.call(this);

            this.setValue(this.selectize.getValue());
        },
        onReattached: function () {
            parent.onReattached.call(this);

            this.selectize.onSearchChange('uniqueSearchQueryOrElseCacheWillBeUsed');
        },
        getValue: function () {
            // If the control only supports a single selection then just return
            // the first of the selected items (or false if none selected)
            if (!this.supportsMultipleSelection) {
                return parent.getValue.call(this);
            }
            else {
                return this.selectize.getValue();
            }
        }
    };
}, window.rhubarb.viewBridgeClasses.DropDownViewBridge);
