// 获取弹窗元素
var modal = document.getElementById("simpleModal");

// 获取按钮元素
var modalBtn = document.getElementById("modalBtn");

// 获取关闭弹窗按钮元素
var closeBtn = document.getElementsByClassName('closeBtn')[0];

// 监听打开弹窗事件
modalBtn.addEventListener("click",openModal);

// 监听关闭弹窗事件
closeBtn.addEventListener("click",closeModal);

// 监听window关闭弹窗
window.addEventListener("click",outsiteClick);


// 弹窗事件
function openModal(){
	modal.style.display = "block";
}

// 关闭弹窗
function closeModal(){
	modal.style.display = "none";
}

// outsiteClick
function outsiteClick(e){
	console.log(e);
	if (e.target == modal) {
		modal.style.display = "none";
	}
}

