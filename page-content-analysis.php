<?php
/**
 * Template Name: Content Analysis
 */
?>
<script type="text/javascript" src="https://seomanageruk.com/wp-content/themes/praison-theme/dist/scripts/bundle2.js"></script>
<link rel="stylesheet" href="https://seomanageruk.com/wp-content/themes/praison-theme/dist/styles/style.css">
<link rel="stylesheet" href="https://seomanageruk.com/wp-content/themes/praison-theme/dist/styles/yoast.min.css">




<div class="site-container">

    <div class="site-inner">
        <div class="wrap">
            <div class="content-sidebar-wrap">
                <div id="input" class="form-container">
                    <div id="inputForm" class="inputForm">
                        <button type="button" id="refresh-analysis">Refresh!</button>
                        <label for="locale">Locale</label>
                        <input type="text" id="locale" name="locale" placeholder="en_US" />
                        <label for="content">Text</label>
                        <textarea id="content" name="content" placeholder="Start writing your text!"></textarea>
                        <label for="focusKeyword">Focus keyword</label>
                        <input type="text" id="focusKeyword" name="focusKeyword" placeholder="Choose a focus keyword" />
                    </div>
                    <form id="snippetForm" class="snippetForm">
                        <label>Snippet Preview</label>
                        <div id="snippet" class="output">

                        </div>
                    </form>
                </div>
                <div id="output-container" class="output-container">
                    <p>This is what the page might look like on a Google search result page.</p>

                    <p>Edit the SEO title and meta description by clicking the title and meta description!</p>
                    <h2>SEO assessments</h2>
                    <div id="output" class="output">

                    </div>
                    <h2>Content assessments</h2>
                    <div id="contentOutput" class="output">

                    </div>
                </div>

                <div class="overallScore-container">
                    <h2>The SEO score</h2>

                    <p>This is the overall score for the text and snippet preview.</p>

                    <div id="overallScore" class="overallScore">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve" width="200" height="200">
                <g id="BG">
                </g>
                <g id="BG_dark">
                </g>
                <g id="bg_light">
                    <path fill="#5B2942" d="M415,500H85c-46.8,0-85-38.2-85-85V85C0,38.2,38.2,0,85,0h330c46.8,0,85,38.2,85,85v330
                        C500,461.8,461.8,500,415,500z"/>
                    <path fill="none" stroke="#7EADB9" stroke-width="17" stroke-miterlimit="10" d="M404.6,467H95.4C61.1,467,33,438.9,33,404.6V95.4
                        C33,61.1,61.1,33,95.4,33h309.2c34.3,0,62.4,28.1,62.4,62.4v309.2C467,438.9,438.9,467,404.6,467z"/>
                </g>
                <g id="Layer_2">
                    <circle id="score_circle_shadow" fill="#77B227" cx="250" cy="250" r="155"/>
                    <path id="score_circle" fill="#9FDA4F" d="M172.5,384.2C98.4,341.4,73,246.6,115.8,172.5S253.4,73,327.5,115.8"/>
                    <g>
                        <g>
                            <g display="none">
                                <path display="inline" fill="#FEC228" d="M668,338.4c-30.4,0-55-24.6-55-55s24.6-55,55-55"/>
                                <path display="inline" fill="#8BDA53" d="M668,215.1c-30.4,0-55-24.6-55-55s24.6-55,55-55"/>
                                <path display="inline" fill="#FF443D" d="M668,461.7c-30.4,0-55-24.6-55-55s24.6-55,55-55"/>
                            </g>
                        </g>
                    </g>
                </g>
                </svg>

                        <h2>Marked text</h2>
                        <div class="marked-text"></div>
                        <hr />
                        <h2>Raw marked text</h2>
                        <pre class="marked-text-raw"></pre>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

