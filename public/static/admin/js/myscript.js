//民族列表
var national = [
    "汉族", "壮族", "满族", "回族", "苗族", "维吾尔族", "土家族", "彝族", "蒙古族", "藏族", "布依族", "侗族", "瑶族", "朝鲜族", "白族", "哈尼族",
    "哈萨克族", "黎族", "傣族", "畲族", "傈僳族", "仡佬族", "东乡族", "高山族", "拉祜族", "水族", "佤族", "纳西族", "羌族", "土族", "仫佬族", "锡伯族",
    "柯尔克孜族", "达斡尔族", "景颇族", "毛南族", "撒拉族", "布朗族", "塔吉克族", "阿昌族", "普米族", "鄂温克族", "怒族", "京族", "基诺族", "德昂族", "保安族",
    "俄罗斯族", "裕固族", "乌孜别克族", "门巴族", "鄂伦春族", "独龙族", "塔塔尔族", "赫哲族", "珞巴族"
];
window.onload = function () {
    var nat = document.getElementById("minzu");
    for (var i = 0; i < national.length; i++) {
        var option = document.createElement('option');
        option.value = i;
        var txt = document.createTextNode(national[i]);
        option.appendChild(txt);
        nat.appendChild(option);
    }
}
var cityJson = [{
        "item_code": "110000",
        "item_name": "城乡建设学院"
    },
    {
        "item_code": "120000",
        "item_name": "动物科技学院"
    },
    {
        "item_code": "130000",
        "item_name": "动物医学院"
    },
    {
        "item_code": "140000",
        "item_name": "国土资源学院"
    },
    {
        "item_code": "150000",
        "item_name": "机电工程学院"
    },


    {
        "item_code": "110100",
        "item_name": "城乡规划"
    },
    {
        "item_code": "110200",
        "item_name": "给排水科学与工程"
    },


    {
        "item_code": "110101",
        "item_name": "1401城乡"
    },
    {
        "item_code": "110102",
        "item_name": "1402城乡"
    },
    {
        "item_code": "110201",
        "item_name": "1401给排水"
    },


]
$(function () {
    //load city.json

    var sb = new StringBuffer();
    $.each(cityJson,
        function (i, val) {
            if (val.item_code.substr(2, 4) == '0000') {
                // sb.append("<option value='" + val.item_code + "'>" + val.item_name + "</option>");
                sb.append("<option value='" + val.item_code + "'>" + val.item_name + "</option>");
            }
        });
    $("#choosePro").after(sb.toString());

}); // 省值变化时 处理市
function doProvAndCityRelation() {
    var city = $("#citys");
    var county = $("#county");
    if (city.children().length > 1) {
        city.empty();
    }
    if (county.children().length > 1) {
        county.empty();
    }
    if ($("#chooseCity").length === 0) {
        city.append("<option id='chooseCity' value='-1'>请选择您所在城市</option>");
    }
    if ($("#chooseCounty").length === 0) {
        county.append("<option id='chooseCounty' value='-1'>请选择您所在区/县</option>");
    }
    var sb = new StringBuffer();
    $.each(cityJson,
        function (i, val) {
            if (val.item_code.substr(0, 2) == $("#province").val().substr(0, 2) && val.item_code.substr(2, 4) != '0000' && val.item_code.substr(4, 2) == '00') {
                sb.append("<option value='" + val.item_code + "'>" + val.item_name + "</option>");
            }
        });
    $("#chooseCity").after(sb.toString());
} // 市值变化时 处理区/县
function doCityAndCountyRelation() {
    var cityVal = $("#citys").val();
    var county = $("#county");
    if (county.children().length > 1) {
        county.empty();
    }
    if ($("#chooseCounty").length === 0) {
        county.append("<option id='chooseCounty' value='-1'>请选择您所在区/县</option>");
    }
    var sb = new StringBuffer();
    $.each(cityJson,
        function (i, val) {
            if (cityVal == '110100' || cityVal == "120100" || cityVal == "310100" || cityVal == "500100") {
                if (val.item_code.substr(0, 3) == cityVal.substr(0, 3) && val.item_code.substr(4, 2) != '00') {
                    sb.append("<option value='" + val.item_code + "'>" + val.item_name + "</option>");
                }
            } else {
                if (val.item_code.substr(0, 4) == cityVal.substr(0, 4) && val.item_code.substr(4, 2) != '00') {
                    sb.append("<option value='" + val.item_code + "'>" + val.item_name + "</option>");
                }
            }
        });
    $("#chooseCounty").after(sb.toString());

}

function StringBuffer(str) {
    var arr = [];
    str = str || "";
    var size = 0; // 存放数组大小
    arr.push(str);
    // 追加字符串
    this.append = function (str1) {
        arr.push(str1);
        return this;
    };
    // 返回字符串
    this.toString = function () {
        return arr.join("");
    };
    // 清空 
    this.clear = function (key) {
        size = 0;
        arr = [];
    };
    // 返回数组大小 
    this.size = function () {
        return size;
    };
    // 返回数组 
    this.toArray = function () {
        return buffer;
    };
    // 倒序返回字符串 
    this.doReverse = function () {
        var str = buffer.join('');
        str = str.split('');
        return str.reverse().join('');
    };
}
