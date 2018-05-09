
window.onload=function() {
	var oLi1=document.getElementById('li1');
	var oLi2=document.getElementById('li2');
	var oLi3=document.getElementById('li3');
	var oLi4=document.getElementById('li4');
	var oLi5=document.getElementById('li5');
	var oDiv2_2_1=document.getElementById('div2_2_1');
	var oDiv2_2_2=document.getElementById('div2_2_2');
	var oDiv2_2_3=document.getElementById('div2_2_3');
	var oDiv2_2_4=document.getElementById('div2_2_4');
	var oDiv2_2_5=document.getElementById('div2_2_5');
	var oImg0=document.getElementById('img0');
	var oEnt=document.getElementById('ent');
	var oZhezhao=document.getElementById('zhezhao');
	var onoff=0;
	
	oImg0.onmouseover=function() {
		oZhezhao.style.display="block";
		oEnt.style.display="block";	
}
	oImg0.onclick=function() {
		oZhezhao.style.display="block";
		oEnt.style.display="block";	
	}
	oZhezhao.onclick=function() {
		if (onoff) {
			oZhezhao.style.display="none";
			oEnt.style.display="none";
			onoff=0;	
		}else {
			onoff=1;
		}
		
	}
	oLi1.onmouseover=function() {
		oLi1.style.color="#C0C0C0";
		oLi2.style.color="#fff";	
		oLi3.style.color="#fff";
		oLi4.style.color="#fff";
		oLi5.style.color="#fff";		
	}
	oLi2.onmouseover=function() {
		oLi2.style.color="#C0C0C0";
		oLi1.style.color="#fff";	
		oLi3.style.color="#fff";
		oLi4.style.color="#fff";
		oLi5.style.color="#fff";		
	}
	oLi3.onmouseover=function() {
		oLi3.style.color="#C0C0C0";
		oLi2.style.color="#fff";	
		oLi1.style.color="#fff";
		oLi4.style.color="#fff";
		oLi5.style.color="#fff";		
	}
	oLi4.onmouseover=function() {
		oLi4.style.color="#C0C0C0";
		oLi2.style.color="#fff";	
		oLi3.style.color="#fff";
		oLi1.style.color="#fff";
		oLi5.style.color="#fff";		
	}
	oLi5.onmouseover=function() {
		oLi5.style.color="#C0C0C0";
		oLi2.style.color="#fff";	
		oLi3.style.color="#fff";
		oLi1.style.color="#fff";
		oLi4.style.color="#fff";		
	}
	
									/////////////////////////////////////////////////////////////////////////
	oLi1.onclick=function() {
		oDiv2_2_1.style.display="block";
		oDiv2_2_2.style.display="none";
		oDiv2_2_3.style.display="none";
		oDiv2_2_4.style.display="none";
		oDiv2_2_5.style.display="none";
	}
	oLi2.onclick=function() {
		oDiv2_2_1.style.display="none";
		oDiv2_2_2.style.display="block";
		oDiv2_2_3.style.display="none";
		oDiv2_2_4.style.display="none";
		oDiv2_2_5.style.display="none";
	}																	// 显示那个div
	oLi3.onclick=function() {
		oDiv2_2_1.style.display="none";
		oDiv2_2_2.style.display="none";
		oDiv2_2_3.style.display="block";
		oDiv2_2_4.style.display="none";
		oDiv2_2_5.style.display="none";
	}
	oLi4.onclick=function() {
		oDiv2_2_1.style.display="none";
		oDiv2_2_2.style.display="none";
		oDiv2_2_3.style.display="none";
		oDiv2_2_4.style.display="block";
		oDiv2_2_5.style.display="none";
	}
	oLi5.onclick=function() {
		oDiv2_2_1.style.display="none";
		oDiv2_2_2.style.display="none";
		oDiv2_2_3.style.display="none";
		oDiv2_2_4.style.display="none";
		oDiv2_2_5.style.display="block";
	}
   									////////////////////////////////////////////////////////////////////////////////
									
}
// JavaScript Document