rhubarb.vb.create('SelectizeLibraryViewBridge', function (parent) {
    return {
        selectize: null,
        originalValues:{},
        attachEvents: function () {
            parent.attachEvents.call(this);

            var self = this,
                $selectize = $(this.viewNode).selectize(
                    {
                        options: [],
                        create: false,
                        loadThrottle: 150,
                        labelField: 'name',
                        searchField: 'name',
                        allowEmptyOption: true,
                        plugins: ['remove_button'],
                        onChange:function(value) {
                            self.setValue(value, true);
                        }
                    }
                );

            this.selectize = $selectize[0].selectize;

            var options = [];
            for (var op in this.selectize.options) {
                options.push({name:this.selectize.options[op].name, value:op});
            }

            this.originalValues = options;
        },
        onReattached: function () {
            parent.onReattached.call(this);

            this.selectize.onSearchChange('uniqueSearchQueryOrElseCacheWillBeUsed');
        },
        getValue: function () {
            if (!this.supportsMultipleSelection) {
                return parent.getValue.call(this);
            }
            else {
                return this.selectize.getValue();
            }
        },
        setValue: function (value, preventSelectizeReload) {
            parent.setValue.call(this, value);
            if (!preventSelectizeReload) {
                this.reloadSelectize();
            }
        },
        reloadSelectize: function () {
            var self = this;

            this.selectize.clear();
            this.selectize.clearOptions();
            this.selectize.load(function(callback) {
                callback(self.originalValues);
            })
        }
    };
}, window.rhubarb.viewBridgeClasses.DropDownViewBridge);
