
import { useState, useEffect } from 'react'
import ReactDOM from 'react-dom'

var results; 
var outstuff="";
var seriesindex;




var isFinished= false; 
var ListOfData = {};
const GetData = () => {
	




const https = require('https');

https.get('data.json', (resp) => {
  let data = '';

  // A chunk of data has been received.
  resp.on('data', (chunk) => {
    data += chunk;
  });

  // The whole response has been received. Print out the result.
  resp.on('end', () => {
  // displayStuff(data);
   
   test2(data)
   
   
  });

}).on("error", (err) => {
  console.log("Error: " + err.message);
});


function listsubtitles(ids,strList){
	
	
	
}


function test2(jsonStuff){
	
var newstuff = JSON.parse(jsonStuff); 

console.log(newstuff);

	var start=0; 
	
	while(start <8)
	{
		
		if(newstuff.list[start].Series >"" ){
			
			//console.log(newstuff.list[start].Series); 
			let newItem  = new RowData(newstuff.list[start].Series,newstuff.list[start].titles,newstuff.list[start].links)
			ListOfData[start]= newItem 
			
			var part=  <option key={start} value={newstuff.list[start].Series}> {newstuff.list[start].Series } </option>
	//outstuff= outstuff+  part; 
	outstuff = [...outstuff,part]
//

//outstuff= [...outstuff,part]



		}; 
		
		start++; 
		
		
		
		
		
		
	}
	
const seriesList = <div ><select size="8" style={{overflow:"hidden"}} className='seriesList' onChange={handleChange} > {outstuff}</select><h1></h1></div>
;


//const seriesList =<div> <h1>...</h1></div>
ReactDOM.render(seriesList, document.getElementById('series'));
}

	
	
return (
<div>
...
</div>

)


  }
  


function handleChange2(e){
	
	
	
	
	var listofLinks= ListOfData[seriesindex].getLinks(); 
	var arrayoflinks= listofLinks.split(","); 
	
	window.location= arrayoflinks[e.target.selectedIndex]

	
	
}
function handleChange(e){
	
	
//console.log(); 

var strList= ListOfData[e.target.selectedIndex].getTitles()
	var arrayofTitles = strList.split(",");
	
	
	var y =0; 
	var outstuff_html="";
	
	while(y < arrayofTitles.length)
	{
		
		
		var single =  <option key ={y}> {arrayofTitles[y]}</option> 
		outstuff_html = [...outstuff_html,single]
		y++;
		
	}
	
	
	seriesindex= e.target.selectedIndex;
	
	const seriesList = <div ><select size="8" style={{overflow:"hidden"}} className='seriesList' onChange={handleChange2} > {outstuff_html}</select><h1></h1></div>
;


//const seriesList =<div> <h1>...</h1></div>
ReactDOM.render(seriesList, document.getElementById('subtitles'));
	
}
		

class RowData{
	
	constructor(series,subTitles,links){
		this.series =series; 
		this.subTitles = subTitles; 
		this.links = links 
		
		
	}
	getSeries(){
		

		return this.series; 
		
	}
	
	getTitles(){
		
		return this.subTitles;
		
		
	}
	
	getLinks(){
		console.log(this.links)
		
	return this.links;
	
}
	
}	



export default GetData
