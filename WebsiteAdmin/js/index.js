
//var subAccount = document.querySelector(".subnav-account");
function isElementVisible(element) {
    let style = window.getComputedStyle(element);
    return style.display !== "none";
  }
  
  let visibleObj = document.querySelector(".subnav-account");
  
  
function openSubAccount() {
    
    if(isElementVisible(visibleObj)  == false) {
        visibleObj.style.display = 'block';
    }
    else {
        visibleObj.style.display = 'none';
    }
}; 

