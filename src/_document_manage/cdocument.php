<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<link rel="stylesheet" type="text/css" href="../css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../css/component.css" />		
</head>
<form id="document_form" action="../_document_manage/cjump.php" method="post" onsubmit="return ck(this)">
<table width="90%" border="1" style="position: absolute;top:10%;left: 5%">
    <h3 style="text-algin:left">&emsp;&emsp;基本信息录入</h3>
<section class="content" width="100%">				
                                <tr><td>
				<span class="input input--hoshi">
                                    <input  style="color:black" class="input__field input__field--hoshi" type="text" id="name" name="name" required="required"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="name">
						<span class="input__label-content input__label-content--hoshi">姓名</span>
					</label>
                                </span></td>
                                <td>
				<span class="input input--hoshi">
                                    <input style="color:black" class="input__field input__field--hoshi" type="text" id="sex" name="sex" required="required"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-2" for="sex">
						<span class="input__label-content input__label-content--hoshi">性别</span>
					</label>
                                </span></td></tr>
                                <tr><td>
				<span class="input input--hoshi">
                                    <input style="color:black" class="input__field input__field--hoshi" type="number" id="age" name="age" max="60" min="18" required="required"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-3" for="age">
						<span class="input__label-content input__label-content--hoshi">年龄</span>
					</label>
                                </span></td>
                                <td>
                                <span class="input input--hoshi">
                                    <input style="color:black"class="input__field input__field--hoshi" type="text" id="id" name="id" required="required" minlength="18" maxlength="18" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="id">
						<span class="input__label-content input__label-content--hoshi">身份证号</span>
					</label>
                                </span></td></tr>
                                <tr><td>
                                <span class="input input--hoshi">
                                    <input style="color:black"class="input__field input__field--hoshi" type="tel" id="tel" name="tel" required="required" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="tel">
						<span class="input__label-content input__label-content--hoshi">联系方式</span>
					</label>
                                </span></td>
                                <td>
                                <span class="input input--hoshi">
					<input style="color:black"class="input__field input__field--hoshi" type="text" id="workage" name="workage" required="required"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="workage">
						<span class="input__label-content input__label-content--hoshi">工龄</span>
					</label>
                                </span></td></tr>
                                <tr><td>
                                <span class="input input--hoshi">
                                    <input style="color:black"class="input__field input__field--hoshi" type="text" id="degree" name="degree"  required="required"/>
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="degree">
						<span class="input__label-content input__label-content--hoshi">学历</span>
					</label>
                                </span></td>
                                <td>
                                <span class="input input--hoshi">
                                    <input style="color:black"class="input__field input__field--hoshi" type="text" id="corp" name="corp" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="corp">
						<span class="input__label-content input__label-content--hoshi">公司</span>
					</label>
                                </span></td></tr>
                                <tr><td>
                                <span class="input input--hoshi">
                                    <input style="color:black"class="input__field input__field--hoshi" type="text" id="job"name="job" />
					<label class="input__label input__label--hoshi input__label--hoshi-color-1" for="job">
						<span class="input__label-content input__label-content--hoshi">职位</span>
					</label>
                                </span></td>
                                <td>
                                <span class="input input--hoshi">
                                    <input style="color:#999999;font-size: 20px"class="input__field input__field--hoshi" type="submit" id="ack" value="创建"/>										
                                </span></td>
                                </tr>
				</section>
</table></form>
<script>
    var ck=function(fm){
        if(!/^[男女]$/.test(fm.sex.value)){
            alert("必须输入男或女");
            return false;
        }
        if(!/(本科)|(专科)|(硕士)|(博士)|(专科以下)/.test(fm.degree.value)){
            alert("学历必须输入本科、专科、硕士、博士或者专科以下！");
            return false;
        }   
        return true;
    }
</script>