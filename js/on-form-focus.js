		
		
		
		function inputFocus(i){
			if(i.value==i.defaultValue){ i.value=""; i.style.color="#919191;"; }
		}
		function inputBlur(i){
			if(i.value==""){ i.value=i.defaultValue; i.style.color="#000"; }
		}
