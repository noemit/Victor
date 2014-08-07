<?php /**/ ?><? include('__feeling.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Vector-based Intelligence Construct Trained by Online Response" />
<title>Help VICTOR Learn</title>
<script src="lib/prototype.js" type="text/javascript"></script>
<script src="src/scriptaculous.js" type="text/javascript"></script>
<script src="src/slider.js" type="text/javascript"></script>
<script src="src/livepipe.js" type="text/javascript"></script>
<script src="src/window.js" type="text/javascript"></script>
</head>
<body>
<div id="maincontainer">

<div id="topsection"><div class="innertube">&nbsp;</div></div>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube" id="phase-1">
<img src="images/intro.png" />
<img src="images/filler.png" />

<div class="bad-headline" id="bad-headline" onclick="getSentence(VICTOR.mHID); return false;">bad headline?</div>
<div class="curved"  id="sentence" onmouseup="getSelText(); ">Requires JavaScript.</div>
<p id="hello-human"><strong>Hello Human.</strong> <span id="question" style="color:DarkMagenta;">How strongly do you feel about this headline?</span></p>
<div id="carousel-container-1">
<div class="intensity-word">Don't care</div>
<div id="track">
		<div id="handle" title="Drag me!" style="bottom:3px; background:transparent url(images/slider.png) no-repeat scroll 0 0; width:15px; height:28px; cursor:pointer;"></div>
		</div>
		<div class="intensity-word red">Strongly</div>
		<div id="next-button-container"><input style="display:none;" onclick="carousel();" id="nxtBtn" type="button" name="next" value="Next" class="button"></div>

		</div>
		<h2 style="display:none;"  id="important_phrase"></h2>
		<div style="display:none;" id="carousel-container-2">
			<div style="display:none;" id="emotion-choices-3" class="emotion-holder">

					<input class="emot" type="button" name="astonished" value="excited">
					<input class="emot" type="button" name="conflicted" value="conflicted">
					<input class="emot" type="button" name="afraid" value="angry">
			</div>

			<div style="display:none;" id="emotion-choices-2" class="emotion-holder">

					<input class="emot" type="button" name="delighted" value="excited">
					<input class="emot" type="button" name="happy" value="happy">
					<input class="emot" type="button" name="pleased" value="content">
					<input class="emot" type="button" name="insulted" value="angry">
					<input class="emot" type="button" name="miserable" value="miserable">
					<input class="emot" type="button" name="uncomfortable" value="sad">
			</div>

			<div style="display:none;" id="emotion-choices-1" class="emotion-holder">

					<input class="emot" type="button" name="empathic" value="content">
					<input class="emot" type="button" name="tired" value="tired">
					<input class="emot" type="button" name="bored" value="sad">
			</div>
		</div>

</div>
<div id="carousel-container-3" style="display:none;" >
<div class="curved">Thanks! That helped a lot! Every time you teach me how you feel about a certain headline, I become <strong>smarter</strong> and more <strong>in tune</strong> with human emotion.</div>
<a><img id="teach-me-more" src="images/teach.png"></a>
<a href="https://twitter.com/robotscanfeel" TARGET="_blank"><img src="images/twitter.png"></a>
<a id="modal3" href="http://dvt.name/victor/how.html"><img id="how-am-i-feeling" src="images/work.png"></a>
</div>
</div>
</div>

<div id="leftcolumn">
<table width="100%" height="41px" cellspacing="0" cellpadding="0" border="0">
<tbody>
<tr>
<td valign="middle" align="center"><a href="recent.php" id="feelingbox" class="howfeeling"><?//=feeling();?></a></td>
</tr>
</tbody>
</table>
</div>


<div style="" id="footer">Info &#8226; <a href="http://dvt.name/victor/about.html" id="modal">Meet VICTOR</a> &#8226; <a href="http://dvt.name/victor/how.html" id="modal2">How does VICTOR work?</a> &#8226;
<!-- AddThis Button BEGIN -->
<span class="addthis_toolbox addthis_default_style">
<a href="http://www.addthis.com/bookmark.php" class="addthis_button" style="background:transparent url(http://sharethis.com/images/rotating-icon2.gif) no-repeat scroll center left;line-height:16px;margin:0 0 5px;padding:2px 0 2px 20px; height: 16px;" style="text-decoration:none;"> Share VICTOR</a>
</span>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=xa-4b2f242f0c54731d"></script>
<!-- AddThis Button END -->
&#8226; <a href="http://code.google.com/p/victor-api/" target="_blank">VICTOR API</a>
&#8226; PolyFX Studios &#169; 2010</div>

</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12223939-1");
pageTracker._setDomainName(".robotscanfeel.com");
pageTracker._trackPageview();
} catch(err) {}</script>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=5472888;
var sc_invisible=1;
var sc_partition=60;
var sc_click_stat=1;
var sc_security="dffc2d3e";
</script>

<script type="text/javascript"
src="http://www.statcounter.com/counter/counter.js"></script><noscript><div
class="statcounter"><a title="wordpress blog stats"
href="http://www.statcounter.com/wordpress.com/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/5472888/0/dffc2d3e/1/"
alt="wordpress blog stats" ></a></div></noscript>
<!-- End of StatCounter Code -->
</body>
		<script type="text/javascript" language="javascript">
			spec = <?=(array_pop(array_keys($_GET)) ? array_pop(array_keys($_GET)) : -1 );?>;
			var nb_on = 0;
			var VICTOR = { mStrength: 0, mFeeling: "neutral", mPhrase: "", mHID: 0};

			function carousel() {
				//$('carousel-container').fade({ duration: 3.0, from: 1, to: 0 });
				//Effect.BlindUp('carousel-container', { duration: 3.0 });
				$('bad-headline').hide();
				Effect.DropLeft('carousel-container-1', { afterFinish: function( ) {Effect.Appear('carousel-container-2'); Effect.Pulsate('question', { pulses: 2, duration: 1.5 }); $('question').update('How does the headline make you feel?');}} );
			}

			function finalCar() {
				Effect.DropLeft('phase-1', { afterFinish: function( ) {Effect.Appear('carousel-container-3');}} );
			}

			function resetCar() {
				VICTOR = { mStrength: 0, mFeeling: "neutral", mPhrase: "", mHID: 0};
				$('handle').setStyle({'left': '193px'});
				slider_a.value = 0.5;
				getSentence();
				$('bad-headline').show();
				$('carousel-container-1').show();
				$('carousel-container-2').hide();
				Effect.DropLeft('carousel-container-3', { afterFinish: function( ) {Effect.Appear('phase-1'); $('question').update('How strongly do you feel about this headline?');}} );
			}

			function getSentence(bad) {
				bad = typeof(bad) != 'undefined' ? bad : -1;
				new Ajax.Request('http://dvt.name/victor/__random_headline.php?' + spec,
				{
 					method:'post',
 					parameters: 'b='+bad ,
 					onSuccess: function(transport) {
 						var response = transport.responseText.evalJSON() || "No response text. Please refresh your browser (F5).";
 						$('sentence').update(response['headline']+" <a target=\"blank\" title=\"Source Permalink\" href=\""+response['source']+"\"><img src=\"external.png\"></a>");
 						VICTOR.mHID = response['id'];
 						$('feelingbox').update(response['emote']);
 						spec = -1;
 					},
 					onLoading: function(){ if(!Prototype.Browser.IE) {$('sentence').update("<img src=\"images/loader.gif\">");} },
 					onFailure: function(){ $('sentence').update("No response text. Please refresh your browser (F5)."); }
 				});
			}

			function talkToVICTOR() {
				new Ajax.Request('http://dvt.name/victor/__teach.php',
				{
 					method:'post',
 					parameters: VICTOR,
 					onSuccess: function(transport) {
 						var response = transport.responseText || "No response text. Please refresh your browser (F5).";
 						if (response == "OK") {
 							// yay!
 						}
 					}
 				});
 				finalCar();
			}

			function getSelText()
			{
				var txt = '';
				if (window.getSelection) {
					txt = window.getSelection();
				}
				else if (document.getSelection) {
					txt = document.getSelection();
				}
				else if (document.selection) {
					txt = document.selection.createRange().text;
				}
				else
					return;
				if ($('sentence').innerHTML.indexOf(txt) == -1)
					return;
				else {
						$('important_phrase').innerHTML = txt;
						//$('sentence').innerHTML=$('sentence').innerHTML.replace(txt,'<FONT COLOR="#FF0000">'+txt+'<\/FONT>')
						//VICTOR.mPhrase = txt;
					}
			}

			function stripHTML() {
				$('sentence').innerHTML = $('sentence').innerHTML.replace(/(<([^>]+)>)/ig,"");
				return true;
			}

			function handleEmotionChoices(strength) {
				if (strength >= 0.75) {
					$('emotion-choices-1').hide();
					$('emotion-choices-2').hide();
					$('emotion-choices-3').show();
				}
				else if (strength < 0.75 && strength > 0.25) {
					$('emotion-choices-1').hide();
					$('emotion-choices-2').show();
					$('emotion-choices-3').hide();
				}
				else if (strength <= 0.25) {
					$('emotion-choices-1').show();
					$('emotion-choices-2').hide();
					$('emotion-choices-3').hide();
				}

				if (nb_on == 0) {
					nb_on++;
					if(Prototype.Browser.WebKit) {
						$('nxtBtn').setStyle({marginTop:'0'});
					}
					$('nxtBtn').appear();
				}

				VICTOR.mStrength = strength;
			}

			var slider_a = new Control.Slider('handle', 'track', {
				range: $R(0, 1),
				sliderValue: 0.5, // won't work if set to 0 due to a bug(?) in script.aculo.us
				onSlide: function(v){
						//$('debug3').innerHTML = 'slide: ' + v;
						handleEmotionChoices(v);
					},
				onChange: function(v){
						//$('debug3').innerHTML = 'changed: ' + v;
						handleEmotionChoices(v);
					}
			});

			document.observe('dom:loaded', function() {
				getSentence();
				Effect.Pulsate('question', { pulses: 2, duration: 1.5 });
				var modal = new Control.Modal($('modal'),{
					overlayOpacity: 0.75,
					className: 'modal',
					fade: true
				});
				var modal2 = new Control.Modal($('modal2'),{
					overlayOpacity: 0.75,
					className: 'modal',
					fade: true
				});
				var modal3 = new Control.Modal($('modal3'),{
					overlayOpacity: 0.75,
					className: 'modal',
					fade: true
				});
				var modal4 = new Control.Modal($('modal4'),{
					overlayOpacity: 0.75,
					className: 'modal',
					fade: true
				});
			});

			Event.observe(window,'load', function() {
				$$(".atclear").invoke("hide");
			});

			Event.observe($('teach-me-more'),'click', function() {
				resetCar();
			});

			$$(".emot").invoke("observe", "click", function() {
				VICTOR.mFeeling = this.name;
				//alert(VICTOR.mStrength + " " + VICTOR.mFeeling + " for id " + VICTOR.mHID);
				VICTOR.mPhrase = $('important_phrase').innerHTML;
				talkToVICTOR();
			});

			Effect.DropLeft = function(element) {
			  element = $(element);
			  var oldStyle = {
			    top: element.getStyle('top'),
			    left: element.getStyle('left'),
			    opacity: element.getInlineOpacity() };
			  return new Effect.Parallel(
			    [ new Effect.Move(element, {x: -200, y: 0, sync: true }),
			      new Effect.Opacity(element, { sync: true, to: 0.0 }) ],
			    Object.extend(
			      { duration: 0.5,
			        beforeSetup: function(effect) {
			          effect.effects[0].element.makePositioned();
			        },
			        afterFinishInternal: function(effect) {
			          effect.effects[0].element.hide().undoPositioned().setStyle(oldStyle);
			        }
			      }, arguments[1] || { }));
			};

			Effect.FromRight = function(element) {
			  element = $(element);
			  var oldStyle = {
			    top: element.getStyle('top'),
			    left: element.getStyle('left'),
			    opacity: element.getInlineOpacity() };
			  return new Effect.Parallel(
			    [ new Effect.Move(element, {x: -200, y: 0, sync: true }),
			      new Effect.Opacity(element, { sync: true, to: 1.0 }) ],
			    Object.extend(
			      { duration: 0.5,
			        beforeSetup: function(effect) {
			          effect.effects[0].element.makePositioned();
			        },
			        afterFinishInternal: function(effect) {
			          effect.effects[0].element.hide().undoPositioned().setStyle(oldStyle);
			        }
			      }, arguments[1] || { }));
			};
	</script>
</html>
