﻿function Validator(e){this.formobj=document.forms[e];if(!this.formobj){alert("Error: couldnot get Form object "+e);return}if(this.formobj.onsubmit){this.formobj.old_onsubmit=this.formobj.onsubmit;this.formobj.onsubmit=null}else{this.formobj.old_onsubmit=null}this.formobj._sfm_form_name=e;this.formobj.onsubmit=form_submit_handler;this.addValidation=add_validation;this.setAddnlValidationFunction=set_addnl_vfunction;this.clearAllValidations=clear_all_validations;this.disable_validations=false;document.error_disp_handler=new sfm_ErrorDisplayHandler;this.EnableOnPageErrorDisplay=validator_enable_OPED;this.EnableOnPageErrorDisplaySingleBox=validator_enable_OPED_SB;this.show_errors_together=true;this.EnableMsgsTogether=sfm_enable_show_msgs_together}function set_addnl_vfunction(e){this.formobj.addnlvalidation=e}function sfm_enable_show_msgs_together(){this.show_errors_together=true;this.formobj.show_errors_together=true}function clear_all_validations(){for(var e=0;e<this.formobj.elements.length;e++){this.formobj.elements[e].validationset=null}}function form_submit_handler(){var bRet=true;document.error_disp_handler.clear_msgs();for(var itr=0;itr<this.elements.length;itr++){if(this.elements[itr].validationset&&!this.elements[itr].validationset.validate()){bRet=false}if(!bRet&&!this.show_errors_together){break}}if(!bRet){document.error_disp_handler.FinalShowMsg();return false}if(this.addnlvalidation){str=" var ret = "+this.addnlvalidation+"()";eval(str);if(!ret)return ret}return true}function add_validation(e,t,n){var r=null;if(arguments.length>3){r=arguments[3]}if(!this.formobj){alert("Error: The form object is not set properly");return}var i=this.formobj[e];if(i.length&&isNaN(i.selectedIndex)){i=i[0]}if(!i){alert("Error: Couldnot get the input object named: "+e);return}if(!i.validationset){i.validationset=new ValidationSet(i,this.show_errors_together)}i.validationset.add(t,n,r);i.validatorobj=this}function validator_enable_OPED(){document.error_disp_handler.EnableOnPageDisplay(false)}function validator_enable_OPED_SB(){document.error_disp_handler.EnableOnPageDisplay(true)}function sfm_ErrorDisplayHandler(){this.msgdisplay=new AlertMsgDisplayer;this.EnableOnPageDisplay=edh_EnableOnPageDisplay;this.ShowMsg=edh_ShowMsg;this.FinalShowMsg=edh_FinalShowMsg;this.all_msgs=new Array;this.clear_msgs=edh_clear_msgs}function edh_clear_msgs(){this.msgdisplay.clearmsg(this.all_msgs);this.all_msgs=new Array}function edh_FinalShowMsg(){this.msgdisplay.showmsg(this.all_msgs)}function edh_EnableOnPageDisplay(e){if(true==e){this.msgdisplay=new SingleBoxErrorDisplay}else{this.msgdisplay=new DivMsgDisplayer}}function edh_ShowMsg(e,t){var n=new Array;n["input_element"]=t;n["msg"]=e;this.all_msgs.push(n)}function AlertMsgDisplayer(){this.showmsg=alert_showmsg;this.clearmsg=alert_clearmsg}function alert_clearmsg(e){}function alert_showmsg(e){var t="";var n=null;for(var r in e){if(null==n){n=e[r]["input_element"]}t+=e[r]["msg"]+"\n"}alert(t);if(null!=n){n.focus()}}function sfm_show_error_msg(e,t){document.error_disp_handler.ShowMsg(e,t)}function SingleBoxErrorDisplay(){this.showmsg=sb_div_showmsg;this.clearmsg=sb_div_clearmsg}function sb_div_clearmsg(e){var t=form_error_div_name(e);show_div_msg(t,"")}function sb_div_showmsg(e){var t="<ul>\n";for(var n in e){t+="<li>"+e[n]["msg"]+"</li>\n"}t+="</ul>";var r=form_error_div_name(e);show_div_msg(r,t)}function form_error_div_name(e){var t=null;for(var n in e){t=e[n]["input_element"];if(t){break}}var r="";if(t){r=t.form._sfm_form_name+"_errorloc"}return r}function DivMsgDisplayer(){this.showmsg=div_showmsg;this.clearmsg=div_clearmsg}function div_clearmsg(e){for(var t in e){var n=element_div_name(e[t]["input_element"]);show_div_msg(n,"")}}function element_div_name(e){var t=e.form._sfm_form_name+"_"+e.name+"_errorloc";t=t.replace(/[\[\]]/gi,"");return t}function div_showmsg(e){var t;var n=null;for(var r in e){if(null==n){n=e[r]["input_element"]}var i=element_div_name(e[r]["input_element"]);show_div_msg(i,e[r]["msg"])}if(null!=n){n.focus()}}function show_div_msg(e,t){if(e.length<=0)return false;if(document.layers){divlayer=document.layers[e];if(!divlayer){return}divlayer.document.open();divlayer.document.write(t);divlayer.document.close()}else if(document.all){divlayer=document.all[e];if(!divlayer){return}divlayer.innerHTML=t}else if(document.getElementById){divlayer=document.getElementById(e);if(!divlayer){return}divlayer.innerHTML=t}divlayer.style.visibility="visible";return false}function ValidationDesc(e,t,n,r){this.desc=t;this.error=n;this.itemobj=e;this.condition=r;this.validate=vdesc_validate}function vdesc_validate(){if(this.condition!=null){if(!eval(this.condition)){return true}}if(!validateInput(this.desc,this.itemobj,this.error)){this.itemobj.validatorobj.disable_validations=true;this.itemobj.focus();return false}return true}function ValidationSet(e,t){this.vSet=new Array;this.add=add_validationdesc;this.validate=vset_validate;this.itemobj=e;this.msgs_together=t}function add_validationdesc(e,t,n){this.vSet[this.vSet.length]=new ValidationDesc(this.itemobj,e,t,n)}function vset_validate(){var e=true;for(var t=0;t<this.vSet.length;t++){e=e&&this.vSet[t].validate();if(!e&&!this.msgs_together){break}}return e}function validateEmail(e){var t=e.match("^(.+)@(.+)$");if(t==null)return false;if(t[1]!=null){var n=/^\"?[\w-_\.]*\"?$/;if(t[1].match(n)==null)return false}if(t[2]!=null){var r=/^[\w-\.]*\.[A-Za-z]{2,4}$/;if(t[2].match(r)==null){var i=/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;if(t[2].match(i)==null)return false}return true}return false}function IsCheckSelected(e,t){var n=false;var r=e.form.elements[e.name];if(r.length){var i=-1;for(var s=0;s<r.length;s++){if(r[s].value==t){i=s;break}}if(i>=0){if(r[i].checked=="1"){n=true}}}else{if(e.checked=="1"){n=true}}return n}function TestDontSelectChk(e,t,n){var r=true;r=IsCheckSelected(e,t)?false:true;if(r==false){if(!n||n.length==0){n="Can't Proceed as you selected "+e.name}sfm_show_error_msg(n,e)}return r}function TestShouldSelectChk(e,t,n){var r=true;r=IsCheckSelected(e,t)?true:false;if(r==false){if(!n||n.length==0){n="You should select"+e.name}sfm_show_error_msg(n,e)}return r}function TestRequiredInput(objValue,strError){var ret=true;if(eval(objValue.value.length)==0){if(!strError||strError.length==0){strError=objValue.name+" : Required Field"}sfm_show_error_msg(strError,objValue);ret=false}return ret}function TestMaxLen(objValue,strMaxLen,strError){var ret=true;if(eval(objValue.value.length)>eval(strMaxLen)){if(!strError||strError.length==0){strError=objValue.name+" : "+strMaxLen+" characters maximum "}sfm_show_error_msg(strError,objValue);ret=false}return ret}function TestMinLen(objValue,strMinLen,strError){var ret=true;if(eval(objValue.value.length)<eval(strMinLen)){if(!strError||strError.length==0){strError=objValue.name+" : "+strMinLen+" characters minimum  "}sfm_show_error_msg(strError,objValue);ret=false}return ret}function TestInputType(e,t,n,r){var i=true;var s=e.value.search(t);if(e.value.length>0&&s>=0){if(!n||n.length==0){n=r}sfm_show_error_msg(n,e);i=false}return i}function TestEmail(e,t){var n=true;if(e.value.length>0&&!validateEmail(e.value)){if(!t||t.length==0){t=e.name+": Enter a valid Email address "}sfm_show_error_msg(t,e);n=false}return n}function TestLessThan(objValue,strLessThan,strError){var ret=true;if(isNaN(objValue.value)){sfm_show_error_msg(objValue.name+": Should be a number ",objValue);ret=false}else if(eval(objValue.value)>=eval(strLessThan)){if(!strError||strError.length==0){strError=objValue.name+" : value should be less than "+strLessThan}sfm_show_error_msg(strError,objValue);ret=false}return ret}function TestGreaterThan(objValue,strGreaterThan,strError){var ret=true;if(isNaN(objValue.value)){sfm_show_error_msg(objValue.name+": Should be a number ",objValue);ret=false}else if(eval(objValue.value)<=eval(strGreaterThan)){if(!strError||strError.length==0){strError=objValue.name+" : value should be greater than "+strGreaterThan}sfm_show_error_msg(strError,objValue);ret=false}return ret}function TestRegExp(e,t,n){var r=true;if(e.value.length>0&&!e.value.match(t)){if(!n||n.length==0){n=e.name+": Invalid characters found "}sfm_show_error_msg(n,e);r=false}return r}function TestDontSelect(e,t,n){var r=true;if(e.value==null){sfm_show_error_msg("Error: dontselect command for non-select Item",e);r=false}else if(e.value==t){if(!n||n.length==0){n=e.name+": Please Select one option "}sfm_show_error_msg(n,e);r=false}return r}function TestSelectOneRadio(e,t){var n=e.form.elements[e.name];var r=false;for(var i=0;i<n.length;i++){if(n[i].checked=="1"){r=true;break}}if(false==r){if(!t||t.length==0){t="Please select one option from "+e.name}sfm_show_error_msg(t,e)}return r}function TestFileExtension(e,t,n){var r=false;var i=false;if(e.value.length<=0){return true}var s=t.split(";");for(var o=0;o<s.length;o++){ext=e.value.substr(e.value.length-s[o].length,s[o].length);ext=ext.toLowerCase();if(ext==s[o]){i=true;break}}if(!i){if(!n||n.length==0){n=e.name+" allowed file extensions are: "+t}sfm_show_error_msg(n,e);r=false}else{r=true}return r}function validateInput(e,t,n){var r=true;var i=e.search("=");var s="";var o="";if(i>=0){s=e.substring(0,i);o=e.substr(i+1)}else{s=e}switch(s){case"req":case"required":{r=TestRequiredInput(t,n);break};case"maxlength":case"maxlen":{r=TestMaxLen(t,o,n);break};case"minlength":case"minlen":{r=TestMinLen(t,o,n);break};case"alnum":case"alphanumeric":{r=TestInputType(t,"[^A-Za-z0-9]",n,t.name+": Only alpha-numeric characters allowed ");break};case"alnum_s":case"alphanumeric_space":{r=TestInputType(t,"[^A-Za-z0-9\\s]",n,t.name+": Only alpha-numeric characters and space allowed ");break};case"num":case"numeric":{r=TestInputType(t,"[^0-9]",n,t.name+": Only digits allowed ");break};case"alphabetic":case"alpha":{r=TestInputType(t,"[^A-Za-z]",n,t.name+": Only alphabetic characters allowed ");break};case"alphabetic_space":case"alpha_s":{r=TestInputType(t,"[^A-Za-z\\s]",n,t.name+": Only alphabetic characters and space allowed ");break};case"email":{r=TestEmail(t,n);break};case"lt":case"lessthan":{r=TestLessThan(t,o,n);break};case"gt":case"greaterthan":{r=TestGreaterThan(t,o,n);break};case"regexp":{r=TestRegExp(t,o,n);break};case"dontselect":{r=TestDontSelect(t,o,n);break};case"dontselectchk":{r=TestDontSelectChk(t,o,n);break};case"shouldselchk":{r=TestShouldSelectChk(t,o,n);break};case"selone_radio":{r=TestSelectOneRadio(t,n);break};case"file_extn":{r=TestFileExtension(t,o,n);break}}return r}function VWZ_IsListItemSelected(e,t){for(var n=0;n<e.options.length;n++){if(e.options[n].selected==true&&e.options[n].value==t){return true}}return false}function VWZ_IsChecked(e,t){if(e.length){for(var n=0;n<e.length;n++){if(e[n].checked=="1"&&e[n].value==t){return true}}}else{if(e.checked=="1"){return true}}return false}