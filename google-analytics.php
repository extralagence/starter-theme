<?php
// This scripts are exemples. They need to be changed when push to prod.
?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','<?php echo EXTRA_URI . '/assets/js/lib/local-ga.js'; ?>','ga');

	ga('create', 'UA-59534077-1', 'auto');
	ga('send', 'pageview');

</script>

<script>
	(function(d) {
		var config = {
				kitId: 'lxo0rnv',
				scriptTimeout: 3000
			},
			h=d.documentElement,
			t=setTimeout(function(){
				h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";
			},config.scriptTimeout),
			tk=d.createElement("script"),
			f=false,
			s=d.getElementsByTagName("script")[0],
			a;
		h.className+=" wf-loading";
		//tk.src='//use.typekit.net/'+config.kitId+'.js';
		tk.src='<?php echo EXTRA_URI . '/assets/js/lib/local-typekit.js'; ?>';
		tk.async=true;
		tk.onload=tk.onreadystatechange=function(){
			a=this.readyState;
			if(f||a&&a!="complete"&&a!="loaded")
				return;
			f=true;
			clearTimeout(t);
			try{
				Typekit.load(config)
			}catch(e){}
		};
		s.parentNode.insertBefore(tk,s)
	})(document);
</script>