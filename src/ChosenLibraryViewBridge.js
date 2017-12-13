rhubarb.vb.create('ChosenLibraryViewBridge', function() {
    return {
        attachEvents:function() {
            $(this.viewNode).chosen();
        }
    };
});