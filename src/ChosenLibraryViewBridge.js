rhubarb.vb.create('ChosenLibraryViewBridge', function() {
    return {
        chosen:null,
        attachEvents:function() {
            this.chosen = $(this.viewNode).chosen();
        }
    };
});
