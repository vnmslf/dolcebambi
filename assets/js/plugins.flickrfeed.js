!function(c){c.fn.jflickrfeed=function(l,i){var e,a=(l=c.extend(!0,{flickrbase:"https://api.flickr.com/services/feeds/",feedapi:"photos_public.gne",limit:20,qstrings:{lang:"en-us",format:"json",jsoncallback:"?"},cleanDescription:!0,useTemplate:!0,itemTemplate:"",itemCallback:function(){}},l)).flickrbase+l.feedapi+"?",t=!0;for(e in l.qstrings)t||(a+="&"),a+=e+"="+l.qstrings[e],t=!1;return c(this).each(function(){var m=c(this),n=this;c.getJSON(a,function(e){c.each(e.items,function(e,i){var a,t,c;if(e<l.limit){if(l.cleanDescription&&(e=i.description,(a=/<p>(.*?)<\/p>/g).test(e)&&(i.description=e.match(a)[2],void 0!==i.description&&(i.description=i.description.replace("<p>","").replace("</p>","")))),i.image_s=i.media.m.replace("_m","_s"),i.image_t=i.media.m.replace("_m","_t"),i.image_m=i.media.m.replace("_m","_m"),i.image=i.media.m.replace("_m",""),i.image_b=i.media.m.replace("_m","_b"),i.image_q=i.media.m.replace("_m","_q"),delete i.media,l.useTemplate){for(t in c=l.itemTemplate,i)a=new RegExp("{{"+t+"}}","g"),c=c.replace(a,i[t]);m.append(c)}l.itemCallback.call(n,i)}}),c.isFunction(i)&&i.call(n,e)})})}}(jQuery);