rhubarb.vb.create('SelectizeLibraryViewBridge', function (parent) {
    return {
        selectize: null,
        originalValues:{},
        attachEvents: function () {
            parent.attachEvents.call(this);

            this.initialiseSelectize();
        },
        initialiseSelectize: function(){
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

            this.refreshSelectize();
            this.selectize.onSearchChange('uniqueSearchQueryOrElseCacheWillBeUsed');
        },
        getValue: function () {
            return this.selectize.getValue();
        },
        setValue: function (value, preventSelectizeReload) {
            parent.setValue.call(this, value);
            if (!preventSelectizeReload) {
                this.reloadSelectize();
            }
            $(this.viewNode).val(value);

            this.valueChanged();
        },
        reloadSelectize: function () {
            var self = this;

            this.selectize.clear();
            this.selectize.clearOptions();
            this.selectize.load(function (callback) {
                callback(self.originalValues);
            })
        },
        refreshSelectize: function () {

            var options = [];

            for( var i = 0; i < this.viewNode.options.length; i++ ) {
                options.push({name: this.viewNode.options[i].text, value: this.viewNode.options[i].value});
            }

            this.selectize.clear();
            this.selectize.clearOptions();
            this.selectize.load(function(options, callback) {

                callback(options);

            }.bind(this, options))
        }
    };
}, window.rhubarb.viewBridgeClasses.DropDownViewBridge);
