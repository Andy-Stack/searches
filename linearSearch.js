function linearSearch(arr, n){
	for (i = 0; i < arr.length; i++){
		if (arr[i] == n) {return i;}
	}
	return -1;
}

let arr = [1,2,3,4,5,6,7,8,9,10];
console.log(linearSearch(arr,5));