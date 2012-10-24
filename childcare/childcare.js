var list = document.getElementsByTagName('li');
var arr = new Array();
var ascendArr = new Array();
var descendArr = new Array();

function descend(descendArr){  
    var ulist =document.getElementById('ulist');
    var descendList = '';
    //remove old, unsorted list
	while (ulist.firstChild){
        ulist.removeChild;
    }
   //replace with new, sorted list
    for (var x = 0; x < descendArr.length; x++ ) {
        descendList+= "<li>"  + descendArr[x] + "</li>";
    }
    document.getElementById("ulist").innerHTML = descendList;
}

function ascend(ascendArr){
    //remove old, unsorted list elements
	var ulist =document.getElementsByTagName('ul');
    var ascendList = '';
    while (ulist.firstChild){
        ulist.removeChild;
    }
	//replace with new, sorted list
    for (var x = 0; x < ascendArr.length; x++ ) {
        ascendList+= "<li>"  + ascendArr[x] + "</li>";
    }
    document.getElementById("ulist").innerHTML = ascendList;
}
//reads in HTML list, sorts it into two arrays, ascendArr and descendArr, sends them to functions which write them to the page

for (var x=0;x<list.length;x++){
var spc = list[x].innerHTML.indexOf(' ');
arr.push(list[x].innerHTML.slice(spc+1)+ ' ' + list[x].innerHTML.slice(0,spc));
}
var changeArr = arr.sort();
for (var x =0;x<arr.length;x++){
var changeSpc = changeArr[x].indexOf(' ');
changeArr[x]=arr[x].slice(changeSpc+1)+ ' ' + arr[x].slice(0,changeSpc);

ascendArr.push(changeArr[x]);
}
 //gets the descending list together
swapArr=arr.reverse();
for (var x =0;x<swapArr.length;x++){
var changeSpc = swapArr[x].indexOf(' ');
swapArr[x]=swapArr[x].slice(changeSpc+1)+ ' ' + swapArr[x].slice(0,changeSpc);

descendArr.push(swapArr[x]);
}
//add event handlers, call principle functions ascend() and descend() sends the sorted arrays to them.
var img = document.getElementsByTagName('img');
img[0].addEventListener('click', function(){descend(descendArr)},false);
img[1].addEventListener('click', function(){ascend(ascendArr)},false);
