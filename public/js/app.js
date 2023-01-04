$(window).on("load", function () {
    $(".preloading").fadeOut("slow");
});
var loader = document.getElementById("preloading");
window.addEventListener("load", function () {
    loader.style.display = "none";
});

function showhide(x) {
    var major = document.getElementById("form-1");
    var area = document.getElementById("form-2");
    var rank = document.getElementById("form-3");
    var type = document.getElementById("form-4");
    var wage = document.getElementById("form-5");
    var exp = document.getElementById("form-6");
    var input = document.getElementById("keyword");
    major.style.display = "none";
    area.style.display = "none";
    rank.style.display = "none";
    type.style.display = "none";
    wage.style.display = "none";
    exp.style.display = "none";

    input.addEventListener("focus", function () {
        document.getElementById("search1").checked = false;
        document.getElementById("search2").checked = false;
        document.getElementById("search3").checked = false;
        document.getElementById("search4").checked = false;
        document.getElementById("search5").checked = false;
        document.getElementById("search6").checked = false;
        major.style.display = "none";
        area.style.display = "none";
        rank.style.display = "none";
        type.style.display = "none";
        wage.style.display = "none";
        exp.style.display = "none";
        $("[name='major']").prop("required", false);
        $("[name='area']").prop("required", false);
        $("[name='rank']").prop("required", false);
        $("[name='type']").prop("required", false);
        $("[name='wage']").prop("required", false);
        $("[name='exp']").prop("required", false);
    });
    input.addEventListener("focusout", function () {
        $("#keyword").children().prop("disabled", true);
    });

    if (x == 1) {
        major.style.display = "block";
        $("[name='major']").prop("required", true);
        $("[name='keyword']").prop("required", false);

        input.value = "";
    } else {
        major.style.display = "none";
        document.getElementById("major").value = "";
        $("[name='major']").prop("required", false);
    }
    if (x == 2) {
        area.style.display = "block";
        $("[name='keyword']").prop("required", false);
        input.value = "";
        $("[name='area']").prop("required", true);
    } else {
        area.style.display = "none";
        document.getElementById("area").value = "";
        $("[name='area']").prop("required", false);
    }
    if (x == 3) {
        rank.style.display = "block";
        $("[name='keyword']").prop("required", false);
        input.value = "";
        $("[name='rank']").prop("required", true);
    } else {
        rank.style.display = "none";
        document.getElementById("rank").value = "";
        $("[name='rank']").prop("required", false);
    }
    if (x == 4) {
        type.style.display = "block";
        $("[name='keyword']").prop("required", false);
        input.value = "";
        $("[name='type']").prop("required", true);
    } else {
        type.style.display = "none";
        document.getElementById("type").value = "";
        $("[name='type']").prop("required", false);
    }
    if (x == 5) {
        wage.style.display = "block";
        $("[name='keyword']").prop("required", false);
        input.value = "";
        $("[name='wage']").prop("required", true);
    } else {
        wage.style.display = "none";
        document.getElementById("wage").value = "";
        $("[name='wage']").prop("required", false);
    }
    if (x == 6) {
        exp.style.display = "block";
        $("[name='keyword']").prop("required", false);
        input.value = "";
        $("[name='exp']").prop("required", true);
    } else {
        exp.style.display = "none";
        document.getElementById("exp").value = "";
        $("[name='exp']").prop("required", false);
    }
}

const keyword = document.getElementById("keyword");
hidebutton = document.getElementById("hide-button");
const advanced = document.getElementById("search-advanced");
advanced.style.display = "none";
hidebutton.addEventListener("click", (event) => {
    advanced.style.display = "none";
});

function hide() {
    advanced.style.display = "none";
}

function show() {
    advanced.style.display = "block";
}

$(window).on("load", function () {
    $(".preloading").fadeOut("slow");
});
var loader = document.getElementById("preloading");
window.addEventListener("load", function () {
    loader.style.display = "none";
});


var currentdate = new Date();
var datetime =
    "Đã lưu: " +
    currentdate.getDate() +
    "/" +
    (currentdate.getMonth() + 1) +
    "/" +
    currentdate.getFullYear() +
    " - " +
    currentdate.getHours() +
    ":" +
    currentdate.getMinutes();
console.log(datetime);
function addfvr(id) {
    console.log(id);
    document.getElementById(id).textContent='Đã lưu';
    var id = id;
    var url = document.getElementById('image-logo').src;
    console.log(url);
    var jobname = document.getElementById("jobname").textContent;
    var businessname = document.getElementById("businessname").textContent;
    var jobsalary = document.getElementById("jobsalary").textContent;
    var jobarea = document.getElementById("jobarea").textContent;
    var newJob = {
        id: id,
        jobname: jobname,
        businessname: businessname,
        jobsalary: jobsalary,
        jobarea: jobarea,
        url : url
    };
    if (localStorage.getItem("data") == null) {
        localStorage.setItem("data", "[]");
    }
    var old_data = JSON.parse(localStorage.getItem("data"));
    old_data.push(newJob);
    localStorage.setItem("data", JSON.stringify(old_data));
}
var data = "";
function removefvr(id) {
    let data = localStorage.getItem("data")
        ? JSON.parse(localStorage.getItem("data"))
        : [];
    data.splice(id, 1);
    localStorage.setItem("data", JSON.stringify(data));
    location.reload();
}
function showfvr() {
    var data = JSON.parse(localStorage.getItem("data"));
    $("#box-job-total").append(
        "Danh sách <strong>" + data.length + "</strong> việc làm đã lưu"
    );
    for (let i = 0; i < data.length; i++) {
        var id = data[i].id;
        var jobname = data[i].jobname;
        var businessname = data[i].businessname;
        var jobsalary = data[i].jobsalary;
        var jobarea = data[i].jobarea;
        var url = data[i].url;
        $("#lists").append(
            '<div class="job-item  bg-highlight  job-ta result-job-hover" data-job-id="891088" data-job-position="1" data-box="BoxSearchResult">' +
                '<div class="avatar">' +
                '<a target="_blank" href="https://www.topcv.vn/viec-lam/chuyen-vien-dich-vu-cham-soc-hoc-vien-thu-nhap-10-20-trieu-thang/891088.html" class="company-logo">' +
                '<img src="'+url+'" class="w-100" alt="CÔNG TY CP CÔNG NGHỆ GIÁO DỤC TRƯỜNG HỌC TRỰC TUYẾN - ONSCHOOL" title="CÔNG TY CP CÔNG NGHỆ GIÁO DỤC TRƯỜNG HỌC TRỰC TUYẾN - ONSCHOOL">' +
                "</a>" +
                "</div>" +
                '<div class="body">' +
                '<div class="content">' +
                '<div class="ml">' +
                '<h3 class="title">' +
                '<a target="_blank" class="underline-box-job" href="https://www.topcv.vn/viec-lam/chuyen-vien-dich-vu-cham-soc-hoc-vien-thu-nhap-10-20-trieu-thang/891088.html">' +
                '<span class="bold transform-job-title" data-toggle="tooltip" title="" data-placement="top" data-container="body" data-original-title="' +
                jobname +
                '">' +
                jobname +
                "</span>" +
                '<span class="icon-verified-employer level-five">' +
                "</a>" +
                "</h3>" +
                '<p class="company underline-box-job">' +
                '<a href="" data-toggle="tooltip" title="" data-placement="top" data-container="body" target="_blank" data-original-title="' +
                businessname +
                '">' +
                businessname +
                "</a>" +
                "</p>" +
                '<div class="d-flex">' +
                '<div class="label-content">' +
                '<label class="salary">' +
                jobsalary +
                "</label>" +
                '<label class="address">' +
                jobarea +
                "</label>" +
                "</div>" +
                '<div class="icon mr-auto">' +
                "</div>" +
                "</div>" +
                "</div>" +
                '<div class="mr-auto text-right" style="margin-left: 450px">' +
                '<p class="saved_at">' +
                datetime +
                "</p>" +
                "<div>" +
                '<div id="box-save-job-873859" class="box-save-job">' +
                '<button id="unsave" onclick="removefvr(' +
                id +
                ')">' +
                '<i class="fa-solid fa-trash"></i> Bỏ lưu' +
                "</button>" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>" +
                "</div>"
        );
    }
    console.log(data);
}
