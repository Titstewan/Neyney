(function($){function getTransformProperty(element)
{var properties=['transform','WebkitTransform','MozTransform','msTransform','OTransform'];var p;while(p=properties.shift())
{if(typeof element.style[p]!='undefined')
{return p;}}
return'transform';}
var proxied=$.fn.css;$.fn.css=function(arg,val)
{if
(typeof $.propFix['transform']=='undefined'&&(arg=='transform'||(typeof arg=='object'&&typeof arg['transform']!='undefined')))
{$.propFix['transform']=getTransformProperty(this.get(0));}
if($.propFix['transform']!='transform')
{if(arg=='transform')
{arg=$.propFix['transform'];if(typeof val=='undefined'&&jQuery.style)
{return jQuery.style(this.get(0),arg);}}
else if
(typeof arg=='object'&&typeof arg['transform']!='undefined')
{arg[$.propFix['transform']]=arg['transform'];delete arg['transform'];}}
return proxied.apply(this,arguments);};})(jQuery);