<?php 
	$OFFSET_Y = 0;
	
	function getY($base) {
		return $base + $GLOBALS['OFFSET_Y'];
	}
?>
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
	        </p>	 
	        <br/>     	          
	        <br/>     	          
	        <p class="small">
	        	senthil padmanabhan | eBay Motors | @senthil_hi
	        	<br/>
	        	<span class="tiny footnote"><sup>*</sup> Front End Engineering</span>	   	        	    	        	 
	        </p>
	    </div>
    	<div id="title" class="step" data-x="400" data-y="<?php echo getY(2200); ?>" data-z="-100" data-scale="2">
	        <h1>JavaScript</h1>	        
	    </div>
    	<div class="step" data-x="750" data-y="<?php echo getY(2450); ?>" data-z="-100" data-rotate="90" data-scale="2">
	        <p>is EVERYWHERE</p>	        
	    </div>
    	<div class="step" data-x="1500" data-y="<?php echo getY(5650); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">    		    		        
	        <p>CLI - rhino, cscript, jsc, exe</p>
	        <p>WebService & BE Stack - Node.js</p>
	        <p>Photoshop scripting</p>
	        <p>Browser extensions</p>
	        <p>Desktop app - Mac, Windows</p>
	    </div>
	    	  	    	  	    	  	    	  
    	<div class="step" data-x="3100" data-y="<?php echo getY(9750); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
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
    	<div class="step" data-x="4700" data-y="<?php echo getY(13800); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="small">insertAdjacentHTML <strong class="large">100% faster</strong> than innerHTML </p>
	        <p class="small"><a href="http://jsperf.com/insertadjacenthtml-perf" target="_blank">http://jsperf.com/insertadjacenthtml-perf</a></p>
	    </div>
    	<div class="step" data-x="6200" data-y="<?php echo getY(17500); ?>" dsata-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Avoid {evil} <strong class="xlarge">eval</strong></p>
	    </div>
    	<div id ="eval" class="step" data-x="7400" data-y="<?php echo getY(20600); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">If <strong>absolutely</strong> needed do this instead</p>	   
        	<pre class="xsmall">
        var execScript = function(rawScript) {
            var d = document,
                bIE = (typeof d.attachEvent !== "undefined"),
            <strong>scriptNode = d.createElement("script"),</strong>
            headObj = d.getElementsByTagName("script")[0];            
            scriptNode.type = "text/javascript";
            scriptNode.async = true;	    
            if(bIE) {
                <strong>scriptNode.text = rawScript;</strong>
            } else {
                <strong>scriptNode.appendChild(d.createTextNode(rawScript));</strong>
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
    	<div id="gwindow" class="step" data-x="9100" data-y="<?php echo getY(25000); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">Avoid global variables, if used prefix with <strong><q>"window."</q></strong></p>
	        <pre class="small">
 $.ajax("http://ebay.com/item", function(response) {
     var <strong>itemConfig</strong> = JSON.parse(response.itemConfig);
 })	        	
 // Somewhere in code
 $("#quantity").text(<strong>itemConfig</strong>.quantity); --> <em>Will not 
 work since itemConfig is not available in global scope</em>
	        </pre>
	    </div>		    	    	  	    	  	    	  	    	  	    	    	  	    	  	    	  	    	  
    	<div id="nodeList" class="step" data-x="10400" data-y="<?php echo getY(29100); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>In JQuery</p>
	        <p class="medium">$('.box') !== document.getElementsByClassName('box')</p>
	    </div>
    	<div class="step" data-x="11700" data-y="<?php echo getY(32500); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
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
  }</pre>  			
	        <p class="small"><br/><a href="http://jsperf.com/try-catch-if-else" target="_blank">http://jsperf.com/try-catch-if-else</a></p>
	    </div>	  
    	<div id="reflow" class="step" data-x="13500" data-y="<?php echo getY(37150); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Keep reflows minimum</p>
	        <p class="lalign small"> 
	        	- Hide elements before making changes
	        	<br/>
	        	- Make several style changes at once
	        	<br/>
	        	- Clone nodes or create document fragments
	        </p>
	    </div>	    
   		<div class="step" data-x="14900" data-y="<?php echo getY(40700); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Animations</p>
	        <p class="medium">Use <strong>requestAnimationFrame</strong> over <strong>setInterval</strong></p>
	    </div>	    	    	    	  	    	  	    	  	    	  	    	  	    	  	    	  
    	<div class="step" data-x="16100" data-y="<?php echo getY(44100); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
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
    	<div class="step" data-x="17400" data-y="<?php echo getY(48400); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">Avoid <strong>Anti-Patterns</strong></p>
	        <pre class="small">
    <strong>// antipattern</strong>
    if(navigator.userAgent.indexOf('MSIE') !== -1) {    
        document.attachEvent('onclick', doSomething);
    }
    <strong>// better</strong>
    if(document.attachEvent) {
        document.attachEvent('onclick', doSomething);
    }
    <strong>// even better</strong>
    if(typeof document.attacheEvent != "undefined") {
        document.attachEvent('onclick', doSomething);
    }
</pre>  			
	        <p class="small"><br/><em>Complete Reference:</em> <a href="http://shichuan.github.com/javascript-patterns/" target="_blank">http://shichuan.github.com/javascript-patterns/</a></p>
	    </div> 	
   		<div class="step" data-x="18800" data-y="<?php echo getY(52850); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Use <strong>async</strong> & <strong>defer</strong> script attributes wisely!</p>
	    </div>
   		<div class="step" data-x="19900" data-y="<?php echo getY(56150); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>and finally...</p>
	    </div>
   		<div class="step" data-x="21000" data-y="<?php echo getY(59450); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">This presenation was <strong>NOT</strong> created in Powerpoint</p>
	    </div>
   		<div class="step" data-x="22100" data-y="<?php echo getY(62750); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p class="medium">But with <strong class="large">impress.js</strong> web presentation library</p>
	       	<p class="small"><a href="http://bartaz.github.com/impress.js/#/bored" target="_blank">More details: http://bartaz.github.com/impress.js/#/bored</a></p>
	    </div>
   		<div class="step" data-x="23200" data-y="<?php echo getY(66000); ?>" data-z="-100" data-rotate-x="-40" data-rotate-y="30" data-scale="2">
	        <p>Thank You</p>
	        <p class="small"><a href="http://nfs" target="_blank">http://nfs</a></p>
	    </div>	   	    	    	    	    	    	  	    		    	    	    	    	  	    	  	  	    	    	    	    	  	    		    	    	    	    	  	    	  	    	  	    	  	    	  	    	  	    	  	    	    		    	    	    	    	  	    		    	    	    	    	  	    	  	  	    	    	    	    	  	    		    	    	    	    	  	    	  	    	  	    	  	    	  	    	  	    	  	    
	</div>
	<script src="impress.js"></script>
</body>
</html>