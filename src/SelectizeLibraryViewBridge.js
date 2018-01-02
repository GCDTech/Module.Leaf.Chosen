rhubarb.vb.create('SelectizeLibraryViewBridge', function() {
    return {
        chosen:null,
        attachEvents:function() {
            this.chosen = $(this.viewNode).chosen();
        }
    };
}, window.rhubarb.viewBridgeClasses.DropDownViewBridge);
