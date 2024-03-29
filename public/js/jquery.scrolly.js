/*
 *  Project: Scrolly : parallax is easy as a matter of fact !
 *  Description: Based on jQuery boilerplate
 *  Author: Victor C. / Octave & Octave web agency
 *  Licence: MIT
 */
!function(t,i,s){function e(i,s){this.element=i,this.$element=t(this.element),this.options=t.extend({},n,s),this._defaults=n,this._name=o,this.init()}var o="scrolly",n={bgParallax:!1};e.prototype.init=function(){var i=this;this.startPosition=this.$element.position().top,this.offsetTop=this.$element.offset().top,this.height=this.$element.outerHeight(!0),this.velocity=this.$element.attr("data-velocity"),this.bgStart=parseInt(this.$element.attr("data-fit"),10),t(s).scroll(function(){i.didScroll=!0}),setInterval(function(){i.didScroll&&(i.didScroll=!1,i.scrolly())},10)},e.prototype.scrolly=function(){var s=t(i).scrollTop(),e=t(i).height(),o=this.startPosition;this.offsetTop>=s+e?this.$element.addClass("scrolly-invisible"):o=this.$element.hasClass("scrolly-invisible")?this.startPosition+(s+(e-this.offsetTop))*this.velocity:this.startPosition+s*this.velocity,this.bgStart&&(o+=this.bgStart),this.$element.css(this.options.bgParallax===!0?{backgroundPosition:"50% "+o+"px"}:{top:o})},t.fn[o]=function(i){return this.each(function(){t.data(this,"plugin_"+o)||t.data(this,"plugin_"+o,new e(this,i))})}}(jQuery,window,document);
