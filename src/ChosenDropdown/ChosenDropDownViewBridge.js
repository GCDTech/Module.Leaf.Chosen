rhubarb.vb.create('ChosenDropDownViewBridge', function() {
    return {
        attachEvents:function() {
            $(this.viewNode).chosen();
        }
    };
});