            $(document).ready(function(){
                $("#closeErrorWindow").on('click',function(){
                    $("#errorWindow").hide();
                });
                $("#notPower").on('click',function(){
                    $("#errorWindow").show();
                    $("#errorMessage").html('对不起，你没有权限访问！');
                  
                });
                $("#sysError").on('click',function(){
                    $("#errorWindow").show();
                    $("#errorMessage").html('系统错误，请返回！');
                  
                });
                $("#hiddenBut").on('click',function(){
                    $("#butGroup").hide();
                });
                
            });