<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Web Based Powerpoint Presentation using Impress.js</title>
	
    <meta name="description" content="impress.js based presentation">
    <meta name="author" content="Senthil Padmanabhan" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />	
</head>
<body>
	<div id="impress" class="impress-not-supported">
 		<div class="fallback-message">
        	<p>Your browser <b>doesn't support the features required</b> for this presentation, so you are presented with a simplified version.</p>
        	<p>For the best experience please use the latest <b>Chrome</b> or <b>Safari</b> browser. Firefox 10 (to be released soon) will also handle it.</p>
    	</div>    	
    	<div class="step" data-x="0" data-y="0" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>
	        	F2E<sup>*</sup>
	        	<br/>
	        	Best Practices
	        	<br/>
	        	<span class="tiny footnote"><sup>*</sup> Front End Engineering</span>	       
	        </p>	      	          
	    </div>
    	<div id="title" class="step" data-x="400" data-y="1900" data-z="-100" data-scale="2">
	        <h1>JavaScript</h1>	        
	    </div>
    	<div class="step" data-x="750" data-y="2150" data-z="-100" data-rotate="90" data-scale="2">
	        <p>is EVERYWHERE</p>	        
	    </div>
    	<div class="step" data-x="1500" data-y="4500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">    		    		        
	        <p>CLI - rhino, cscript, jsc, exe</p>
	        <p>WebService & BE Stack - Node.js</p>
	        <p>Photoshop scripting</p>
	        <p>Browser extensions</p>
	        <p>Desktop app - Mac, Windows</p>
	    </div>
	    	  	    	  	    	  	    	  
    	<div class="step" data-x="2100" data-y="7000" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">
	        	Linkedin mobile
	        	<br/>
	        	Mac Widgets
	        	<br/>
	        	Yahoo! Widgets - work on TVs too
	        	<br/>
	        	Next Windows OS
	        	<br/>
	        	Consumer Electronics
	        	<br/>
	        	Google, MicroSoft ...
	        </p>
	    </div>	  	    	  	    	  	    	  
    	<div class="step" data-x="2700" data-y="9500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="small">insertAdjacentHTML <strong class="large">100% faster</strong> than innerHTML </p>
	        <p class="small"><a href="http://jsperf.com/insertadjacenthtml-perf" target="_blank">http://jsperf.com/insertadjacenthtml-perf</a></p>
	    </div>
    	<div class="step" data-x="3300" data-y="12000" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Avoid {evil} <strong class="xlarge">eval</strong></p>
	    </div>
    	<div id ="eval" class="step" data-x="3300" data-y="14000" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">If absolutely needed do this instead</p>	   
        	<pre class="xsmall">
        var execScript = function(rawScript) {
            <strong>var scriptNode = document.createElement("script"),</strong>
            headObj = document.getElementsByTagName("script")[0];            
            scriptNode.type = "text/javascript";
            scriptNode.async = true;	    
            if(bIE) {
                scriptNode.text = rawScript;
            } else {
                scriptNode.appendChild(d.createTextNode(rawScript));
   			}
            try {
                headObj.appendChild(scriptNode);
                <strong>headObj.removeChild(scriptNode);</strong>
            } catch (e) {
	            // DO NOTHING
            }
        };
        	</pre>
	    </div>
    	<div id="gwindow" class="step" data-x="3300" data-y="16500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">Always prefix global variables with <strong><q>"window."</q></strong></p>
	        <pre class="small">
 $.ajax("http://ebay.com/item", function(response) {
     var <strong>itemConfig</strong> = JSON.parse(response.itemConfig);
 })	        	
 // Somewhere in code
 $("#quantity").text(<strong>itemConfig</strong>.quantity); --> <em>Will not 
 work since itemConfig is not available in global scope</em>
	        </pre>
	    </div>		    	    	  	    	  	    	  	    	  	    	    	  	    	  	    	  	    	  
    	<div id="nodeList" class="step" data-x="3300" data-y="18700" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>In JQuery</p>
	        <p class="medium">$('.box') !=== document.getElementsByClassName('box')</p>
	    </div>
    	<div class="step" data-x="3300" data-y="20500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">Avoid <strong>try-catch-finally</strong> in performance-critical functions</p>
	        <pre class="small">
  var oProperties = ['first','second','third',...,'nth'], 
      i, l = oProperties.length;
  for( i = 0; i < l; i++ ) {
    try {
      test[oProperties[i]].someproperty = somevalue;
    } catch(<strong>e</strong>) {
      <strong>// e is created & destroyed every time</strong>
      ...
    }
  }	        
	        </pre>
	    </div>	  
    	<div class="step" data-x="3300" data-y="23200" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Beware of implicit object conversion</p>
			<pre class="small">
 // The below example creates 21 new string objects 
    var <strong>s</strong> = '0123456789';
    for( var i = 0; i < <strong>s.length</strong>; i++ ) {
        <strong>s.charAt(i)</strong>;
    }
 // Do this instead
    var <strong>s = new String('0123456789');</strong>			
			</pre>
	    </div>
    	<div id="reflow" class="step" data-x="3300" data-y="25500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Keep reflows minimum</p>
	        <p class="lalign small">
	        	- Clone nodes, instead of direct modification
	        	<br/> 
	        	- Hide elements before making changes
	        	<br/>
	        	- Make several style changes at once
	        </p>
	    </div>	    	    	    	  	    	  	    	  	    	  	    	  	    	  	    	  
    	<div class="step" data-x="3300" data-y="27500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Coding Style</p> 
	        <p class="medium">Curly braces {}	left or right position matters in JS </p>
	        <pre class="medium">
 return               return {
 {                        status: 200
     status: 200      };
 };
 <strong>SILENT ERROR</strong>          <strong>Works fine</strong>
	        </pre>
	    </div>
   		<div class="step" data-x="3300" data-y="30500" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Use <strong>async</strong> & <strong>defer</strong> script attributes wisely!</p>
	    </div>	    	    	    	  	    	  	    	  	    	  	    	  	    	  	    	  	    
	</div>
	<script src="impress.js"></script>
</body>
</html>