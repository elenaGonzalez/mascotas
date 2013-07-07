<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_4a7e8ee7352dcf0fd65f99e489093b39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  42 => 12,  32 => 6,  24 => 2,  19 => 1,  221 => 72,  217 => 71,  213 => 70,  208 => 69,  204 => 74,  202 => 69,  198 => 67,  195 => 66,  191 => 64,  185 => 60,  179 => 57,  176 => 56,  173 => 55,  170 => 54,  165 => 53,  156 => 47,  149 => 43,  145 => 41,  143 => 40,  140 => 39,  134 => 38,  131 => 37,  125 => 34,  121 => 32,  119 => 31,  114 => 29,  109 => 27,  105 => 26,  92 => 15,  86 => 13,  80 => 8,  73 => 7,  67 => 6,  59 => 75,  54 => 65,  51 => 54,  48 => 53,  46 => 14,  39 => 10,  37 => 7,  26 => 3,  142 => 47,  136 => 45,  130 => 43,  128 => 42,  123 => 41,  117 => 39,  113 => 37,  111 => 36,  107 => 35,  103 => 33,  100 => 32,  94 => 17,  89 => 14,  87 => 32,  83 => 30,  74 => 27,  69 => 25,  65 => 24,  61 => 23,  57 => 66,  53 => 20,  33 => 6,  30 => 5,);
    }
}
