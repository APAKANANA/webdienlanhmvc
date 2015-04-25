// update base url ( http://localhost/savsoftquiz/ ). include slash at end
var base_url = "http://danhgia.ipshop.com.vn/";
//var base_url = "http://danhgianangluc-fonterra.ipartner.vn/";



$(document).ready(function(){
	$('#did').on('change', function (){
	var did = $('#did').val();
	var cid = $('#cid').val();
	$.ajax({
		url: base_url + "index.php/hr_sc/xenon/questions/get_level_question/" + did + "/" + cid,
		success: function(data){
		
			var output = "";
			if(data=="0"){
			output += "<option value = '0'>0</option>";
			}else{
			output += '<select id="new_number" class="form-control normal-width display-inline" name="no_of_questions[]">';
				for(var i = 0; i <= data; i++){
					output += "<option value = '"+  i +"'>";
						output += i;
					output += "</option>";
					}
				}
			output += "</select>"; 
                        
                        $('#new_number').remove();
			$("#no_of_question").before(output);
			},
		error: function(xhr,status,strErr){
			alert(base_url + "index.php/hr_sc/questions/get_level_question/" + did + "/" + cid);
			}	
		});
	});
});


var qtime=0;
var answered = new Array();
var reviewed = new Array();

$(document).ready( function(){
var noq=document.getElementById('noq').value;
	for(x=0; x <= noq; x++){
	answered[x]=0;
	reviewed[x]=0;
	}
});

function showquestion(id){

	var noq=document.getElementById('noq').value;
	var cq=document.getElementById('current_question').value;
	if(answered[cq] == "0" && reviewed[cq]=="0"){
	var nq="nq"+cq;
	document.getElementById(nq).style.background="#D0380E";
	document.getElementById(nq).style.color="#ffffff";

	}
	
	for(var x=0; x<=noq; x++){
	var qid="ques"+x;
	document.getElementById(qid).style.display="none";
	document.getElementById(qid).style.visibility="hidden";
	}
	var qid="ques"+id;
	document.getElementById(qid).style.display="block";
	document.getElementById(qid).style.visibility="visible";
	document.getElementById('current_question').value=id;
	var rurl=base_url+"index.php/quiz/update_time/"+cq+"/"+qtime+"";
	$.ajax({
		url: rurl
		
		});
	qtime=0;	
	
	
	
	}
	
function showquestion_afterquiz(id){

	var noq=document.getElementById('noq').value;
	
	for(var x=0; x<=noq; x++){
	var qid="ques"+x;
	document.getElementById(qid).style.display="none";
	document.getElementById(qid).style.visibility="hidden";
	}
	var qid="ques"+id;
	document.getElementById(qid).style.display="block";
	document.getElementById(qid).style.visibility="visible";

	}
	
function update_answer(oid){
var cq=document.getElementById('current_question').value;
	var aurl=base_url+"index.php/quiz/update_answer/"+cq+"/"+oid+"";
	$.ajax({
		url: aurl
		
		});		
}	


function answered_color(){
var cq=document.getElementById('current_question').value;
var nq="nq"+cq;
document.getElementById(nq).style.background="#267B02";
document.getElementById(nq).style.color="#ffffff";
answered[cq]=1;



}	

function reviewlater(){

var cq=document.getElementById('current_question').value;
var nq="nq"+cq;
if(reviewed[cq]=="0"){
document.getElementById(nq).style.background="#FFD800";
document.getElementById(nq).style.color="#ffffff";
reviewed[cq]=1;
}else{
if(answered[cq]=="1"){
document.getElementById(nq).style.background="#267B02";
document.getElementById(nq).style.color="#ffffff";
}else{
document.getElementById(nq).style.background="#D03800";
document.getElementById(nq).style.color="#ffffff";
}
reviewed[cq]=0;
}
}

var firstquestionofcategory=0;

function changecategory(id){
document.getElementById('current_cate').value=id;
hideqnobycate();
}

function hideqnobycate(){
var jsonvar=document.getElementById('json_category_range').value;
var arrobj = $.parseJSON(jsonvar);
var current_cate=document.getElementById('current_cate').value;
var total_cate=document.getElementById('total_cate').value;
for( var j=0; j <= total_cate; j++){
var cateid="cate-"+j;

if(j != current_cate){
arrobj[j].forEach(hideqnobyarr);
document.getElementById(cateid).style.background="#d4e0ed";
document.getElementById(cateid).style.color="#000000";

}else{
arrobj[j].forEach(showqnobyarr);
document.getElementById(cateid).style.background="#2f72b7";
document.getElementById(cateid).style.color="#ffffff";

showquestion(firstquestionofcategory);
}
}
var categorydivid="cate-"+current_cate;
var categorynametxt=document.getElementById(categorydivid).innerHTML;
document.getElementById('category_name_view').innerHTML="You are viewing <b>"+categorynametxt+"</b> section";
}

function hideqnobyarr(element, index, array){
var nq="nq"+element;
document.getElementById(nq).style.display="none";
}

function showqnobyarr(element, index, array){
if(index == 0){
firstquestionofcategory=element;
}
var nq="nq"+element;
document.getElementById(nq).style.display="block";
document.getElementById(nq).innerHTML=(index+1);

}



function clearresponse(){
var current_question=document.getElementById('current_question').value;
for(var op=0; op <= 3; op++){
var opn="op-"+current_question+"-"+op;
document.getElementById(opn).checked = false;

}



}

function submitform(){
document.getElementById('testform').submit();
}
