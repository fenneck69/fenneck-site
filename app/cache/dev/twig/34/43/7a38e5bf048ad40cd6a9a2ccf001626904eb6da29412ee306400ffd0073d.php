<?php

/* WebProfilerBundle:Collector:time.html.twig */
class __TwigTemplate_34437a38e5bf048ad40cd6a9a2ccf001626904eb6da29412ee306400ffd0073d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_fa12cc75343d1cda49d78db2faab560e63d741d25b2b4cd6439dc6f0760db70b"] = $this;
        // line 5
        if ((!array_key_exists("colors", $context))) {
            // line 6
            $context["colors"] = array("default" => "#aacd4e", "section" => "#666", "event_listener" => "#3dd", "event_listener_loading" => "#add", "template" => "#dd3", "doctrine" => "#d3d", "propel" => "#f4d", "child_sections" => "#eed");
        }
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["duration"] = ((twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"))) ? (sprintf("%.0f ms", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration"))) : ("n/a"));
        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        <img width=\"16\" height=\"28\" alt=\"Time\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAABqUlEQVR42t2Vv0sCYRyHX9OmEhsMx/YKGlwLQ69DTEUSBJEQEy5J3FRc/BsuiFqEIIcQIRo6ysUhoaBBWhoaGoJwiMJLglRKrs8bXgienmkQdPDAwX2f57j3fhFJkkbiPwTK5bIiFoul3kmPud8MqKMewDXpwuGww+12n9hsNhFnlijYf/Z4PDmO45Yxo+10ZFGTyWRMEItU6AdCx7lczkgd6n7J2Wx2xm63P6jJMk6n80YQBBN1aUDv9XqvlAbbm2LE7/cLODRB0un0VveAeoDC8/waCQQC18MGQqHQOcEKvw8bcLlcL6TfYnVtCrGRAlartUUYhmn1jKg/E3USjUYfhw3E4/F7ks/nz4YNFIvFQ/ogbUYikdefyqlU6gnuOg2YK5XKvs/n+xhUDgaDTVEUt+HO04ABOBA5isViDTU5kUi81Wq1AzhWMEkDGmAEq2C3UCjcYXGauDvfEsuyUjKZbJRKpVvM8IABU9SVX+cxYABmwIE9cFqtVi9xtgvsC2AHbIAFoKey0gdlHEyDObAEWLACFsEsMALdIJ80+dK0bTS95v7+v/AJnis0eO906QwAAAAASUVORK5CYII=\" />
        <span>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["duration"]) ? $context["duration"] : $this->getContext($context, "duration")), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        // line 34
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAhCAYAAADOHBvaAAACz0lEQVR42t2XXWhSYRjHc+pyWrC10e66qKggiGoF0Qh1SBPFDxCcX00yrG6EImFsRhAuvUjwQgZB1EUICYEkgRJGB0QmKMNGEYx1URYEg2w6amWY/YUXXH7Ms9M5RAk/PByf8/58P573ec+2Wq32V/g3xFKpdB3UQBV8JVTJvXUuxbXN+P96TODNzMzsNJvNo3UCgYCYszmmKKrPYrE4NBrNU7lcvtY8xGNjYyWtVvvEZrPZES9kQyy02+3nx8fH3xFJV5RK5RuHw2GqP8tInEgk+g0GwyN6wlZMJtPdfD6/Y0viVCo1iKHLMpM20Ov1FNqT0BWLsWhiXdImDyiQ7ybHVN1HnKibWHgNHxr5egXI6t90ej49PX0BsYKO4qWlpT1qtXqFhlhGnpHREWPaPiB2dydxL/7ZTRLMnpjg8/lcpNct4mGr1fqSK7HT6UwhfleLuFwuH1EoFBWuxDqd7jPiDzSLe+Lx+AQJYl9MKBQKZ+pb7kaxKBKJXGUgPgqCgGrQOc3S6fQEfuNvFEtisdgUA3E/kcsadE6zhYUFG9lKG2LcvMxA3EKnKUBx+bm6uqptFvcCtUql+kECWcdoNH6BQw56fltcYNTtdr/nSuzxeJbhONkujw9Fo9EYV+JkMvkAjv3txEOVSuUSytk3tqWoz2to/xwYaCcWgtPI5+dsSrGo6mn0GG2PtG6ZDYbBRb/f/5EtcSgUeos2J8HgpmURHMaQz6JglP5U6vV6P6G962Sr5HcUE/rAKXB7bm5uhenwhsPheim8BUa6HwQaSMjSv5HNZl+gstDOb5fL9X1xcTGLZ6fAMSDe6ilTBA4CO7iXyWReB4PBMo5F1WYZymkVc1nK5XKvEHsHWMA+sJ3p8VYAhkjvJ4EPRMCzYrE4XyqV5nGdBA/BLLCC46Tu8tl4kxCAAdKLE0AGzhKkZB73kqIh4PI1lQf4BB6TNn4B8KR3FN9bp4MAAAAASUVORK5CYII=\" alt=\"Timeline\"></span>
    <strong>Timeline</strong>
</span>
";
    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        // line 41
        echo "    <h2>Timeline</h2>
    ";
        // line 42
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"))) {
            // line 43
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 45
            echo "        <p>
            <em>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 51
    public function block_panelContent($context, array $blocks = array())
    {
        // line 52
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <table>
            <tr>
                <th style=\"width: 20%\">Total time</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "duration")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Initialization time</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inittime")), "html", null, true);
        echo " ms</td>
            </tr>
            <tr>
                <th>Threshold</th>
                <td><input type=\"number\" size=\"3\" name=\"threshold\" value=\"1\" min=\"0\"> ms</td>
            </tr>
        </table>
    </form>

    <h3>
        ";
        // line 71
        echo (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) ? ("Request") : ("Main Request"));
        echo "
        <small>
            - ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "duration"), "html", null, true);
        echo " ms
            ";
        // line 74
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent")) {
            // line 75
            echo "                - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "parent"), "token"), "panel" => "time")), "html", null, true);
            echo "\">parent</a>
            ";
        }
        // line 77
        echo "        </small>
    </h3>

    ";
        // line 80
        echo $context["__internal_fa12cc75343d1cda49d78db2faab560e63d741d25b2b4cd6439dc6f0760db70b"]->getdisplay_timeline(("timeline_" . (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo "

    ";
        // line 82
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 83
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 84
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "time"), "method"), "events");
                // line 85
                echo "            <h3>
                Sub-request \"<a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "request"), "method"), "requestattributes"), "get", array(0 => "_controller"), "method"), "html", null, true);
                echo "</a>\"
                <small> - ";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__"), "duration"), "html", null, true);
                echo " ms</small>
            </h3>

            ";
                // line 90
                echo $context["__internal_fa12cc75343d1cda49d78db2faab560e63d741d25b2b4cd6439dc6f0760db70b"]->getdisplay_timeline(("timeline_" . $this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token")), (isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), (isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "    ";
        }
        // line 93
        echo "
    <script>";
        // line 94
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                }

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            }
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param  string selector a CSS-selector-compatible query string.
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors  = ";
        // line 136
        echo twig_jsonencode_filter((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
        echo ",
                _storagePrefix  = 'timeline/',
                _threshold      = 1,
                _requests       = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is.
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is.
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds).
             * @param width     the width of the canvas.
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId    = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent  = 38,
                    colors = _drawingColors,
                    space  = 10.5,
                    ratio  = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx    = canvas.getContext(\"2d\"),
                    backingStoreRatio,
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio  = window.devicePixelRatio          == \"undefined\" ? 1 : window.devicePixelRatio;
                backingStoreRatio = ctx.webkitBackingStorePixelRatio == \"undefined\" ? 1 : ctx.webkitBackingStorePixelRatio;
                scaleRatio        = devicePixelRatio / 1;

                canvasHeight += gapPerEvent * drawableEvents.length;

                canvas.width  = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#dfdfdf\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            ctx.fillStyle = colors.child_sections;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle   = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle   = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle   = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 6);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#dfdfdf\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \" ~ \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / ~ \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"12px sans-serif\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"10px sans-serif\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width     = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (threshold === null) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        };

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 404
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "endtime")), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 406
        echo $context["__internal_fa12cc75343d1cda49d78db2faab560e63d741d25b2b4cd6439dc6f0760db70b"]->getdump_request_data((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), (isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "origin"));
        echo "

";
        // line 408
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"))) {
            // line 409
            echo "                ,
";
            // line 410
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "children"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 411
                echo $context["__internal_fa12cc75343d1cda49d78db2faab560e63d741d25b2b4cd6439dc6f0760db70b"]->getdump_request_data($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "token"), (isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "getcollector", array(0 => "time"), "method"), "events"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "events"), "__section__"), "origin"));
                echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 414
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl  = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize                 = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick  = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup  = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 446
        echo "</script>
";
    }

    // line 449
    public function getdump_request_data($_token = null, $_profile = null, $_events = null, $_origin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $_token,
            "profile" => $_profile,
            "events" => $_events,
            "origin" => $_origin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 451
            $context["__internal_30be8561358f25c5f7d839187e8bbc8dee31a0a385642531fe61174736cd042d"] = $this;
            // line 452
            echo "                {
                    \"id\": \"";
            // line 453
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 454
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")), "__section__"), "origin") - (isset($context["origin"]) ? $context["origin"] : $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 456
            echo $context["__internal_30be8561358f25c5f7d839187e8bbc8dee31a0a385642531fe61174736cd042d"]->getdump_events((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            echo "
                    ]
                }
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 462
    public function getdump_events($_events = null)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $_events,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 464
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 465
                if (("__section__" != (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) {
                    // line 466
                    echo "                        {
                            \"name\": \"";
                    // line 467
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 468
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "category"), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 469
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "origin")), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 470
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "starttime")), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 471
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endtime")), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 472
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "duration")), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 473
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "memory") / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 475
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "periods"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 476
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "starttime")), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute((isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "endtime")), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 478
                    echo "]
                        }";
                    // line 479
                    echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 485
    public function getdisplay_timeline($_id = null, $_events = null, $_colors = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "events" => $_events,
            "colors" => $_colors,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 486
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 488
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["colors"]) ? $context["colors"] : $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 489
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 491
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 492
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  690 => 469,  634 => 456,  606 => 449,  567 => 414,  367 => 155,  328 => 139,  234 => 90,  1073 => 656,  1069 => 654,  1044 => 645,  1026 => 633,  1023 => 632,  1021 => 631,  1013 => 627,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  963 => 604,  959 => 602,  941 => 595,  937 => 593,  930 => 590,  926 => 589,  919 => 587,  911 => 581,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  864 => 558,  854 => 552,  836 => 543,  824 => 537,  800 => 523,  790 => 519,  770 => 507,  740 => 491,  737 => 490,  718 => 482,  646 => 451,  642 => 449,  636 => 446,  542 => 421,  462 => 202,  446 => 197,  431 => 189,  394 => 134,  241 => 93,  505 => 257,  492 => 253,  477 => 249,  458 => 242,  419 => 227,  172 => 57,  1140 => 461,  1136 => 460,  1132 => 459,  1111 => 446,  1104 => 442,  1094 => 435,  1090 => 433,  1075 => 429,  1050 => 420,  1046 => 419,  1042 => 418,  1028 => 414,  994 => 397,  992 => 396,  989 => 395,  975 => 609,  948 => 371,  938 => 364,  922 => 354,  907 => 347,  896 => 573,  851 => 327,  827 => 312,  815 => 531,  787 => 294,  766 => 284,  754 => 499,  719 => 258,  701 => 253,  685 => 245,  592 => 214,  517 => 404,  443 => 152,  416 => 226,  397 => 212,  334 => 141,  1183 => 475,  1175 => 473,  1165 => 468,  1147 => 456,  1137 => 449,  1133 => 447,  1122 => 454,  1114 => 442,  1105 => 440,  1101 => 439,  1093 => 434,  1089 => 433,  1085 => 432,  1076 => 430,  1071 => 428,  1059 => 419,  1055 => 648,  1047 => 413,  1035 => 639,  1022 => 402,  1018 => 630,  998 => 389,  972 => 608,  965 => 368,  929 => 358,  913 => 347,  904 => 344,  899 => 342,  886 => 340,  882 => 339,  875 => 327,  850 => 316,  835 => 309,  823 => 305,  797 => 291,  777 => 277,  761 => 282,  733 => 260,  708 => 253,  704 => 252,  698 => 471,  693 => 247,  671 => 465,  630 => 227,  609 => 220,  604 => 219,  539 => 193,  498 => 170,  472 => 247,  386 => 159,  372 => 121,  297 => 200,  336 => 100,  223 => 55,  956 => 271,  946 => 360,  933 => 296,  917 => 348,  914 => 290,  912 => 289,  901 => 285,  898 => 284,  887 => 280,  870 => 560,  868 => 273,  863 => 324,  853 => 261,  848 => 548,  840 => 253,  834 => 316,  832 => 248,  822 => 244,  820 => 243,  816 => 241,  810 => 492,  807 => 491,  805 => 236,  791 => 262,  788 => 486,  773 => 276,  771 => 232,  768 => 231,  765 => 230,  757 => 269,  743 => 217,  738 => 214,  679 => 466,  673 => 242,  665 => 196,  663 => 236,  657 => 193,  629 => 454,  626 => 443,  603 => 439,  600 => 178,  588 => 215,  570 => 210,  554 => 224,  479 => 172,  418 => 135,  370 => 203,  356 => 122,  624 => 224,  620 => 451,  601 => 446,  580 => 207,  559 => 427,  545 => 198,  497 => 156,  485 => 124,  447 => 113,  424 => 229,  412 => 126,  401 => 135,  391 => 133,  379 => 206,  376 => 103,  333 => 115,  326 => 138,  292 => 88,  287 => 86,  264 => 74,  178 => 59,  12 => 36,  778 => 267,  763 => 244,  742 => 492,  734 => 237,  717 => 210,  714 => 232,  711 => 231,  703 => 226,  653 => 218,  650 => 234,  644 => 190,  616 => 440,  595 => 215,  587 => 434,  578 => 432,  573 => 211,  546 => 423,  534 => 418,  531 => 225,  513 => 230,  475 => 248,  448 => 151,  445 => 236,  429 => 188,  422 => 184,  396 => 138,  345 => 147,  307 => 128,  286 => 112,  247 => 75,  206 => 46,  90 => 42,  283 => 115,  236 => 42,  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 474,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 460,  1145 => 322,  1143 => 321,  1118 => 443,  1115 => 319,  1112 => 318,  1106 => 316,  1103 => 315,  1100 => 314,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 430,  1074 => 304,  1067 => 299,  1064 => 651,  1056 => 293,  1051 => 647,  1048 => 646,  1040 => 285,  1036 => 284,  1032 => 409,  1027 => 281,  1024 => 280,  1016 => 405,  1014 => 272,  1012 => 404,  1009 => 397,  1004 => 624,  982 => 261,  973 => 258,  970 => 607,  967 => 606,  964 => 255,  961 => 366,  958 => 253,  955 => 600,  952 => 251,  950 => 361,  947 => 597,  939 => 356,  936 => 297,  934 => 241,  931 => 295,  923 => 588,  920 => 235,  918 => 352,  915 => 233,  903 => 346,  900 => 228,  897 => 227,  892 => 341,  889 => 224,  881 => 278,  878 => 219,  876 => 276,  865 => 331,  862 => 557,  857 => 267,  849 => 206,  846 => 315,  844 => 546,  841 => 313,  833 => 308,  830 => 539,  828 => 538,  817 => 310,  812 => 530,  809 => 297,  801 => 185,  798 => 300,  796 => 489,  793 => 298,  783 => 177,  769 => 247,  767 => 273,  764 => 505,  756 => 165,  751 => 163,  746 => 478,  739 => 239,  729 => 262,  724 => 484,  721 => 257,  715 => 151,  710 => 475,  707 => 208,  699 => 142,  697 => 252,  694 => 470,  689 => 137,  680 => 134,  675 => 239,  662 => 125,  658 => 235,  654 => 123,  649 => 462,  640 => 448,  619 => 183,  617 => 223,  598 => 107,  576 => 199,  564 => 162,  557 => 96,  550 => 187,  547 => 93,  503 => 81,  493 => 143,  480 => 75,  456 => 68,  450 => 155,  414 => 134,  408 => 176,  368 => 126,  355 => 150,  350 => 120,  342 => 137,  332 => 88,  316 => 16,  255 => 101,  245 => 83,  194 => 68,  200 => 72,  180 => 70,  560 => 191,  549 => 411,  532 => 410,  528 => 160,  525 => 196,  523 => 263,  518 => 180,  514 => 415,  511 => 166,  508 => 258,  501 => 154,  474 => 170,  460 => 123,  455 => 241,  442 => 235,  439 => 195,  436 => 143,  433 => 232,  426 => 58,  415 => 180,  405 => 108,  360 => 128,  354 => 199,  331 => 140,  322 => 99,  304 => 90,  272 => 91,  249 => 92,  233 => 87,  216 => 79,  140 => 51,  126 => 66,  192 => 53,  161 => 58,  320 => 127,  288 => 118,  237 => 91,  232 => 88,  222 => 83,  185 => 75,  150 => 55,  100 => 42,  692 => 474,  683 => 244,  678 => 468,  676 => 467,  666 => 222,  661 => 220,  656 => 237,  641 => 189,  635 => 229,  615 => 221,  590 => 204,  583 => 214,  577 => 212,  575 => 328,  536 => 419,  524 => 90,  510 => 178,  482 => 250,  464 => 244,  452 => 268,  423 => 137,  421 => 90,  413 => 141,  400 => 136,  393 => 211,  385 => 159,  374 => 128,  324 => 112,  310 => 83,  302 => 125,  296 => 121,  282 => 161,  278 => 106,  270 => 102,  259 => 103,  226 => 84,  365 => 125,  347 => 119,  338 => 116,  319 => 94,  315 => 131,  301 => 80,  299 => 8,  281 => 114,  268 => 71,  265 => 105,  262 => 93,  260 => 72,  257 => 103,  225 => 56,  213 => 78,  211 => 81,  197 => 69,  174 => 74,  252 => 68,  242 => 65,  231 => 61,  207 => 76,  195 => 53,  165 => 83,  129 => 67,  84 => 40,  167 => 71,  155 => 47,  127 => 35,  23 => 13,  58 => 25,  20 => 1,  1127 => 457,  1123 => 456,  1119 => 455,  1109 => 441,  1098 => 313,  1091 => 438,  1081 => 431,  1077 => 657,  1066 => 427,  1062 => 426,  1058 => 425,  1053 => 292,  1049 => 422,  1045 => 421,  1037 => 411,  1033 => 416,  1029 => 282,  1020 => 412,  1015 => 410,  1003 => 401,  999 => 400,  991 => 385,  981 => 378,  979 => 388,  976 => 259,  966 => 383,  962 => 383,  953 => 270,  942 => 300,  935 => 592,  925 => 353,  916 => 354,  909 => 580,  905 => 579,  894 => 226,  890 => 281,  883 => 338,  879 => 277,  873 => 333,  869 => 332,  860 => 323,  856 => 329,  852 => 327,  843 => 325,  838 => 544,  825 => 196,  821 => 312,  814 => 299,  804 => 306,  802 => 301,  799 => 234,  789 => 286,  785 => 293,  780 => 513,  774 => 509,  772 => 248,  762 => 504,  753 => 220,  748 => 242,  741 => 271,  728 => 267,  716 => 255,  712 => 254,  706 => 473,  700 => 205,  696 => 476,  688 => 246,  684 => 248,  681 => 244,  664 => 463,  655 => 457,  651 => 235,  647 => 191,  643 => 230,  637 => 230,  632 => 187,  627 => 224,  625 => 453,  622 => 452,  614 => 222,  610 => 220,  607 => 219,  594 => 176,  584 => 173,  582 => 212,  566 => 207,  561 => 205,  556 => 204,  553 => 425,  548 => 201,  540 => 200,  527 => 408,  522 => 406,  520 => 194,  516 => 294,  495 => 158,  487 => 156,  466 => 245,  461 => 70,  453 => 199,  441 => 196,  428 => 116,  417 => 145,  407 => 138,  403 => 136,  398 => 127,  389 => 160,  387 => 164,  384 => 208,  375 => 205,  369 => 148,  359 => 123,  357 => 116,  346 => 111,  343 => 146,  341 => 117,  337 => 90,  327 => 101,  314 => 88,  311 => 94,  309 => 129,  305 => 108,  293 => 120,  289 => 196,  284 => 76,  279 => 83,  277 => 136,  274 => 110,  266 => 70,  261 => 69,  256 => 96,  251 => 182,  220 => 81,  215 => 63,  202 => 94,  198 => 54,  190 => 49,  137 => 28,  132 => 26,  124 => 21,  61 => 12,  34 => 5,  784 => 215,  775 => 485,  760 => 222,  749 => 479,  745 => 493,  736 => 238,  732 => 487,  727 => 476,  725 => 261,  723 => 196,  720 => 211,  713 => 255,  709 => 254,  705 => 480,  702 => 472,  695 => 139,  686 => 468,  682 => 467,  677 => 465,  674 => 178,  672 => 241,  668 => 464,  660 => 464,  652 => 376,  648 => 173,  645 => 232,  638 => 230,  633 => 209,  631 => 364,  628 => 444,  623 => 223,  618 => 160,  612 => 220,  599 => 215,  596 => 216,  593 => 105,  591 => 436,  586 => 150,  579 => 211,  574 => 431,  569 => 208,  562 => 139,  552 => 136,  543 => 174,  533 => 198,  529 => 409,  519 => 127,  500 => 184,  490 => 142,  471 => 129,  467 => 72,  459 => 153,  440 => 106,  437 => 61,  434 => 142,  427 => 230,  420 => 141,  410 => 110,  404 => 129,  402 => 137,  399 => 139,  392 => 82,  388 => 209,  383 => 80,  381 => 105,  378 => 157,  371 => 156,  363 => 153,  361 => 152,  358 => 151,  348 => 140,  344 => 24,  340 => 145,  330 => 103,  325 => 129,  321 => 135,  317 => 107,  313 => 110,  308 => 109,  303 => 122,  298 => 120,  294 => 82,  290 => 119,  275 => 105,  271 => 190,  263 => 75,  258 => 187,  253 => 100,  248 => 97,  244 => 65,  228 => 57,  214 => 63,  191 => 67,  186 => 72,  177 => 69,  175 => 58,  170 => 84,  153 => 77,  146 => 34,  128 => 42,  118 => 49,  113 => 48,  110 => 38,  104 => 31,  97 => 32,  81 => 23,  77 => 20,  65 => 244,  53 => 12,  608 => 225,  602 => 217,  597 => 216,  589 => 213,  585 => 209,  581 => 213,  572 => 204,  568 => 209,  565 => 430,  563 => 429,  558 => 160,  555 => 200,  551 => 424,  541 => 197,  537 => 159,  535 => 199,  530 => 417,  526 => 190,  521 => 182,  515 => 305,  512 => 84,  509 => 228,  507 => 156,  504 => 155,  502 => 256,  499 => 173,  496 => 172,  494 => 254,  491 => 178,  489 => 252,  486 => 176,  483 => 173,  481 => 119,  478 => 160,  476 => 116,  473 => 168,  470 => 121,  468 => 156,  463 => 117,  457 => 160,  454 => 156,  451 => 120,  449 => 198,  444 => 263,  438 => 150,  435 => 149,  432 => 100,  430 => 145,  425 => 146,  411 => 221,  406 => 111,  390 => 136,  382 => 131,  380 => 158,  377 => 129,  373 => 156,  366 => 202,  362 => 124,  353 => 149,  351 => 141,  339 => 191,  335 => 134,  329 => 131,  323 => 128,  318 => 98,  312 => 130,  306 => 92,  300 => 121,  295 => 100,  291 => 86,  285 => 100,  280 => 194,  276 => 111,  267 => 101,  250 => 101,  239 => 64,  229 => 87,  218 => 97,  212 => 62,  210 => 77,  205 => 90,  188 => 90,  184 => 63,  181 => 65,  169 => 44,  160 => 25,  152 => 46,  148 => 49,  134 => 39,  114 => 36,  107 => 6,  76 => 34,  70 => 15,  273 => 80,  269 => 107,  254 => 73,  243 => 66,  240 => 64,  238 => 70,  235 => 89,  230 => 67,  227 => 86,  224 => 66,  221 => 80,  219 => 101,  217 => 64,  208 => 76,  204 => 75,  179 => 47,  159 => 57,  143 => 31,  135 => 46,  119 => 40,  102 => 24,  71 => 23,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 3,  85 => 23,  75 => 18,  68 => 30,  56 => 228,  87 => 41,  21 => 11,  26 => 13,  93 => 27,  88 => 24,  78 => 19,  46 => 13,  27 => 3,  44 => 20,  31 => 4,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 35,  142 => 25,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 1,  25 => 5,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 79,  37 => 78,  22 => 12,  246 => 136,  157 => 39,  145 => 74,  139 => 19,  131 => 48,  123 => 61,  120 => 31,  115 => 10,  111 => 47,  108 => 33,  101 => 30,  98 => 45,  96 => 37,  83 => 33,  74 => 395,  66 => 307,  55 => 24,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 6,  29 => 1,  209 => 58,  203 => 73,  199 => 93,  193 => 51,  189 => 66,  187 => 64,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 22,  149 => 34,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 45,  116 => 57,  112 => 12,  109 => 52,  106 => 51,  103 => 223,  99 => 23,  95 => 27,  92 => 43,  86 => 28,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 18,  57 => 207,  54 => 16,  51 => 13,  48 => 14,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
