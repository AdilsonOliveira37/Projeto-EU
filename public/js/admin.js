$(function(){

    $("#btn_add_work").click(function(){
        $("#modal_work").modal();
    });

    $("#btn_add_skill").click(function(){
        $("#modal_skill").modal();
    });

    $("#btn_add_user").click(function(){
        $("#modal_user").modal();
    });

    $("#btn_upload_work_img").change(function(){
        uploadImg($(this), $("#work_img_path"), $("#work_img"));
    });

    $("#btn_upload_skill_img").change(function(){
        uploadImg($(this), $("#skill_img_path"), $("#skill_img"));
    });
})