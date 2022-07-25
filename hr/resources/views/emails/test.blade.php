{{--<html>--}}
{{--<head>--}}
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<meta content="telephone=no" name="format-detection">
<meta content="width=mobile-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no;" name="viewport">
<meta content="IE=9; IE=8; IE=7; IE=EDGE;" http-equiv="X-UA-Compatible">
<title>@if (trim($__env->yieldContent('template_title')))@yield('template_title')
    | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
{{--    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">--}}
<style type="text/css">
    /*!
         * Bootstrap v4.0.0 (https://getbootstrap.com)
         * Copyright 2011-2018 The Bootstrap Authors
         * Copyright 2011-2018 Twitter, Inc.
         * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
         */
    :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #007bff;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    *, ::after, ::before {
        box-sizing: border-box
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: transparent
    }

    @-ms-viewport {
        width: device-width
    }

    article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
        display: block
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff
    }

    [tabindex="-1"]:focus {
        outline: 0 !important
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: .5rem
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem
    }

    abbr[data-original-title], abbr[title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0
    }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit
    }

    dl, ol, ul {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ol ol, ol ul, ul ol, ul ul {
        margin-bottom: 0
    }

    dt {
        font-weight: 700
    }

    dd {
        margin-bottom: .5rem;
        margin-left: 0
    }

    blockquote {
        margin: 0 0 1rem
    }

    dfn {
        font-style: italic
    }

    b, strong {
        font-weight: bolder
    }

    small {
        font-size: 80%
    }

    sub, sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline
    }

    sub {
        bottom: -.25em
    }

    sup {
        top: -.5em
    }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline
    }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus, a:not([href]):not([tabindex]):hover {
        color: inherit;
        text-decoration: none
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0
    }

    code, kbd, pre, samp {
        font-family: monospace, monospace;
        font-size: 1em
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        -ms-overflow-style: scrollbar
    }

    figure {
        margin: 0 0 1rem
    }

    img {
        vertical-align: middle;
        border-style: none
    }

    svg:not(:root) {
        overflow: hidden
    }

    table {
        border-collapse: collapse
    }

    caption {
        padding-top: .75rem;
        padding-bottom: .75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom
    }

    th {
        text-align: inherit
    }

    label {
        display: inline-block;
        margin-bottom: .5rem
    }

    button {
        border-radius: 0
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color
    }

    button, input, optgroup, select, textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button, input {
        overflow: visible
    }

    button, select {
        text-transform: none
    }

    [type=reset], [type=submit], button, html [type=button] {
        -webkit-appearance: button
    }

    [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner, button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    input[type=checkbox], input[type=radio] {
        box-sizing: border-box;
        padding: 0
    }

    input[type=date], input[type=datetime-local], input[type=month], input[type=time] {
        -webkit-appearance: listbox
    }

    textarea {
        overflow: auto;
        resize: vertical
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0
    }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal
    }

    progress {
        vertical-align: baseline
    }

    [type=number]::-webkit-inner-spin-button, [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: none
    }

    [type=search]::-webkit-search-cancel-button, [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button
    }

    output {
        display: inline-block
    }

    summary {
        display: list-item;
        cursor: pointer
    }

    template {
        display: none
    }

    [hidden] {
        display: none !important
    }

    .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
        margin-bottom: .5rem;
        font-family: inherit;
        font-weight: 500;
        line-height: 1.2;
        color: inherit
    }

    .h1, h1 {
        font-size: 2.5rem
    }

    .h2, h2 {
        font-size: 2rem
    }

    .h3, h3 {
        font-size: 1.75rem
    }

    .h4, h4 {
        font-size: 1.5rem
    }

    .h5, h5 {
        font-size: 1.25rem
    }

    .h6, h6 {
        font-size: 1rem
    }

    .lead {
        font-size: 1.25rem;
        font-weight: 300
    }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2
    }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2
    }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2
    }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .small, small {
        font-size: 80%;
        font-weight: 400
    }

    .mark, mark {
        padding: .2em;
        background-color: #fcf8e3
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .list-inline {
        padding-left: 0;
        list-style: none
    }

    .list-inline-item {
        display: inline-block
    }

    .list-inline-item:not(:last-child) {
        margin-right: .5rem
    }

    .initialism {
        font-size: 90%;
        text-transform: uppercase
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem
    }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d
    }

    .blockquote-footer::before {
        content: "\2014 \00A0"
    }

    .img-fluid {
        max-width: 100%;
        height: auto
    }

    .img-thumbnail {
        padding: .25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: .25rem;
        max-width: 100%;
        height: auto
    }

    .figure {
        display: inline-block
    }

    .figure-img {
        margin-bottom: .5rem;
        line-height: 1
    }

    .figure-caption {
        font-size: 90%;
        color: #6c757d
    }

    code, kbd, pre, samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word
    }

    a > code {
        color: inherit
    }

    kbd {
        padding: .2rem .4rem;
        font-size: 87.5%;
        color: #fff;
        background-color: #212529;
        border-radius: .2rem
    }

    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal
    }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px
        }
    }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto
    }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px
    }

    .no-gutters {
        margin-right: 0;
        margin-left: 0
    }

    .no-gutters > .col, .no-gutters > [class*=col-] {
        padding-right: 0;
        padding-left: 0
    }

    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px
    }

    .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%
    }

    .col-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: none
    }

    .col-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
        flex: 0 0 8.333333%;
        max-width: 8.333333%
    }

    .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
        flex: 0 0 16.666667%;
        max-width: 16.666667%
    }

    .col-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 33.333333%
    }

    .col-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 41.666667%;
        max-width: 41.666667%
    }

    .col-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
        flex: 0 0 58.333333%;
        max-width: 58.333333%
    }

    .col-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%
    }

    .col-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
        flex: 0 0 83.333333%;
        max-width: 83.333333%
    }

    .col-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
        flex: 0 0 91.666667%;
        max-width: 91.666667%
    }

    .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%
    }

    .order-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1
    }

    .order-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13
    }

    .order-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0
    }

    .order-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1
    }

    .order-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2
    }

    .order-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3
    }

    .order-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4
    }

    .order-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5
    }

    .order-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6
    }

    .order-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7
    }

    .order-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8
    }

    .order-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9
    }

    .order-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10
    }

    .order-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11
    }

    .order-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12
    }

    .offset-1 {
        margin-left: 8.333333%
    }

    .offset-2 {
        margin-left: 16.666667%
    }

    .offset-3 {
        margin-left: 25%
    }

    .offset-4 {
        margin-left: 33.333333%
    }

    .offset-5 {
        margin-left: 41.666667%
    }

    .offset-6 {
        margin-left: 50%
    }

    .offset-7 {
        margin-left: 58.333333%
    }

    .offset-8 {
        margin-left: 66.666667%
    }

    .offset-9 {
        margin-left: 75%
    }

    .offset-10 {
        margin-left: 83.333333%
    }

    .offset-11 {
        margin-left: 91.666667%
    }

    @media (min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1
        }

        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13
        }

        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }

        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6
        }

        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7
        }

        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8
        }

        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9
        }

        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10
        }

        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11
        }

        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12
        }

        .offset-sm-0 {
            margin-left: 0
        }

        .offset-sm-1 {
            margin-left: 8.333333%
        }

        .offset-sm-2 {
            margin-left: 16.666667%
        }

        .offset-sm-3 {
            margin-left: 25%
        }

        .offset-sm-4 {
            margin-left: 33.333333%
        }

        .offset-sm-5 {
            margin-left: 41.666667%
        }

        .offset-sm-6 {
            margin-left: 50%
        }

        .offset-sm-7 {
            margin-left: 58.333333%
        }

        .offset-sm-8 {
            margin-left: 66.666667%
        }

        .offset-sm-9 {
            margin-left: 75%
        }

        .offset-sm-10 {
            margin-left: 83.333333%
        }

        .offset-sm-11 {
            margin-left: 91.666667%
        }
    }

    @media (min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-md-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1
        }

        .order-md-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13
        }

        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }

        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6
        }

        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7
        }

        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8
        }

        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9
        }

        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10
        }

        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11
        }

        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12
        }

        .offset-md-0 {
            margin-left: 0
        }

        .offset-md-1 {
            margin-left: 8.333333%
        }

        .offset-md-2 {
            margin-left: 16.666667%
        }

        .offset-md-3 {
            margin-left: 25%
        }

        .offset-md-4 {
            margin-left: 33.333333%
        }

        .offset-md-5 {
            margin-left: 41.666667%
        }

        .offset-md-6 {
            margin-left: 50%
        }

        .offset-md-7 {
            margin-left: 58.333333%
        }

        .offset-md-8 {
            margin-left: 66.666667%
        }

        .offset-md-9 {
            margin-left: 75%
        }

        .offset-md-10 {
            margin-left: 83.333333%
        }

        .offset-md-11 {
            margin-left: 91.666667%
        }
    }

    @media (min-width: 992px) {
        .col-lg {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-lg-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-lg-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-lg-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-lg-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-lg-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-lg-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-lg-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-lg-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-lg-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-lg-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-lg-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1
        }

        .order-lg-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13
        }

        .order-lg-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .order-lg-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .order-lg-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .order-lg-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .order-lg-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .order-lg-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }

        .order-lg-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6
        }

        .order-lg-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7
        }

        .order-lg-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8
        }

        .order-lg-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9
        }

        .order-lg-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10
        }

        .order-lg-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11
        }

        .order-lg-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12
        }

        .offset-lg-0 {
            margin-left: 0
        }

        .offset-lg-1 {
            margin-left: 8.333333%
        }

        .offset-lg-2 {
            margin-left: 16.666667%
        }

        .offset-lg-3 {
            margin-left: 25%
        }

        .offset-lg-4 {
            margin-left: 33.333333%
        }

        .offset-lg-5 {
            margin-left: 41.666667%
        }

        .offset-lg-6 {
            margin-left: 50%
        }

        .offset-lg-7 {
            margin-left: 58.333333%
        }

        .offset-lg-8 {
            margin-left: 66.666667%
        }

        .offset-lg-9 {
            margin-left: 75%
        }

        .offset-lg-10 {
            margin-left: 83.333333%
        }

        .offset-lg-11 {
            margin-left: 91.666667%
        }
    }

    @media (min-width: 1200px) {
        .col-xl {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-xl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-xl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-xl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-xl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-xl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%
        }

        .col-xl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-xl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%
        }

        .col-xl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-xl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-xl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-xl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-xl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-xl-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1
        }

        .order-xl-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13
        }

        .order-xl-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0
        }

        .order-xl-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1
        }

        .order-xl-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2
        }

        .order-xl-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3
        }

        .order-xl-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4
        }

        .order-xl-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5
        }

        .order-xl-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6
        }

        .order-xl-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7
        }

        .order-xl-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8
        }

        .order-xl-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9
        }

        .order-xl-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10
        }

        .order-xl-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11
        }

        .order-xl-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12
        }

        .offset-xl-0 {
            margin-left: 0
        }

        .offset-xl-1 {
            margin-left: 8.333333%
        }

        .offset-xl-2 {
            margin-left: 16.666667%
        }

        .offset-xl-3 {
            margin-left: 25%
        }

        .offset-xl-4 {
            margin-left: 33.333333%
        }

        .offset-xl-5 {
            margin-left: 41.666667%
        }

        .offset-xl-6 {
            margin-left: 50%
        }

        .offset-xl-7 {
            margin-left: 58.333333%
        }

        .offset-xl-8 {
            margin-left: 66.666667%
        }

        .offset-xl-9 {
            margin-left: 75%
        }

        .offset-xl-10 {
            margin-left: 83.333333%
        }

        .offset-xl-11 {
            margin-left: 91.666667%
        }
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent
    }

    .table td, .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6
    }

    .table .table {
        background-color: #fff
    }

    .table-sm td, .table-sm th {
        padding: .3rem
    }

    .table-bordered {
        border: 1px solid #dee2e6
    }

    .table-bordered td, .table-bordered th {
        border: 1px solid #dee2e6
    }

    .table-bordered thead td, .table-bordered thead th {
        border-bottom-width: 2px
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05)
    }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, .075)
    }

    .table-primary, .table-primary > td, .table-primary > th {
        background-color: #b8daff
    }

    .table-hover .table-primary:hover {
        background-color: #9fcdff
    }

    .table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
        background-color: #9fcdff
    }

    .table-secondary, .table-secondary > td, .table-secondary > th {
        background-color: #d6d8db
    }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf
    }

    .table-hover .table-secondary:hover > td, .table-hover .table-secondary:hover > th {
        background-color: #c8cbcf
    }

    .table-success, .table-success > td, .table-success > th {
        background-color: #c3e6cb
    }

    .table-hover .table-success:hover {
        background-color: #b1dfbb
    }

    .table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
        background-color: #b1dfbb
    }

    .table-info, .table-info > td, .table-info > th {
        background-color: #bee5eb
    }

    .table-hover .table-info:hover {
        background-color: #abdde5
    }

    .table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
        background-color: #abdde5
    }

    .table-warning, .table-warning > td, .table-warning > th {
        background-color: #ffeeba
    }

    .table-hover .table-warning:hover {
        background-color: #ffe8a1
    }

    .table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
        background-color: #ffe8a1
    }

    .table-danger, .table-danger > td, .table-danger > th {
        background-color: #f5c6cb
    }

    .table-hover .table-danger:hover {
        background-color: #f1b0b7
    }

    .table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
        background-color: #f1b0b7
    }

    .table-light, .table-light > td, .table-light > th {
        background-color: #fdfdfe
    }

    .table-hover .table-light:hover {
        background-color: #ececf6
    }

    .table-hover .table-light:hover > td, .table-hover .table-light:hover > th {
        background-color: #ececf6
    }

    .table-dark, .table-dark > td, .table-dark > th {
        background-color: #c6c8ca
    }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe
    }

    .table-hover .table-dark:hover > td, .table-hover .table-dark:hover > th {
        background-color: #b9bbbe
    }

    .table-active, .table-active > td, .table-active > th {
        background-color: rgba(0, 0, 0, .075)
    }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, .075)
    }

    .table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
        background-color: rgba(0, 0, 0, .075)
    }

    .table .thead-dark th {
        color: #fff;
        background-color: #212529;
        border-color: #32383e
    }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6
    }

    .table-dark {
        color: #fff;
        background-color: #212529
    }

    .table-dark td, .table-dark th, .table-dark thead th {
        border-color: #32383e
    }

    .table-dark.table-bordered {
        border: 0
    }

    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, .05)
    }

    .table-dark.table-hover tbody tr:hover {
        background-color: rgba(255, 255, 255, .075)
    }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-sm > .table-bordered {
            border: 0
        }
    }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-md > .table-bordered {
            border: 0
        }
    }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-lg > .table-bordered {
            border: 0
        }
    }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar
        }

        .table-responsive-xl > .table-bordered {
            border: 0
        }
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar
    }

    .table-responsive > .table-bordered {
        border: 0
    }

    .form-control {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::-ms-input-placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control::placeholder {
        color: #6c757d;
        opacity: 1
    }

    .form-control:disabled, .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1
    }

    select.form-control:not([size]):not([multiple]) {
        height: calc(2.25rem + 2px)
    }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .form-control-file, .form-control-range {
        display: block;
        width: 100%
    }

    .col-form-label {
        padding-top: calc(.375rem + 1px);
        padding-bottom: calc(.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5
    }

    .col-form-label-lg {
        padding-top: calc(.5rem + 1px);
        padding-bottom: calc(.5rem + 1px);
        font-size: 1.25rem;
        line-height: 1.5
    }

    .col-form-label-sm {
        padding-top: calc(.25rem + 1px);
        padding-bottom: calc(.25rem + 1px);
        font-size: .875rem;
        line-height: 1.5
    }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: .375rem;
        padding-bottom: .375rem;
        margin-bottom: 0;
        line-height: 1.5;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0
    }

    .form-control-plaintext.form-control-lg, .form-control-plaintext.form-control-sm, .input-group-lg > .form-control-plaintext.form-control, .input-group-lg > .input-group-append > .form-control-plaintext.btn, .input-group-lg > .input-group-append > .form-control-plaintext.input-group-text, .input-group-lg > .input-group-prepend > .form-control-plaintext.btn, .input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text, .input-group-sm > .form-control-plaintext.form-control, .input-group-sm > .input-group-append > .form-control-plaintext.btn, .input-group-sm > .input-group-append > .form-control-plaintext.input-group-text, .input-group-sm > .input-group-prepend > .form-control-plaintext.btn, .input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text {
        padding-right: 0;
        padding-left: 0
    }

    .form-control-sm, .input-group-sm > .form-control, .input-group-sm > .input-group-append > .btn, .input-group-sm > .input-group-append > .input-group-text, .input-group-sm > .input-group-prepend > .btn, .input-group-sm > .input-group-prepend > .input-group-text {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem
    }

    .input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]), .input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]), .input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]), .input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]), select.form-control-sm:not([size]):not([multiple]) {
        height: calc(1.8125rem + 2px)
    }

    .form-control-lg, .input-group-lg > .form-control, .input-group-lg > .input-group-append > .btn, .input-group-lg > .input-group-append > .input-group-text, .input-group-lg > .input-group-prepend > .btn, .input-group-lg > .input-group-prepend > .input-group-text {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
    }

    .input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]), .input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]), .input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]), .input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]), select.form-control-lg:not([size]):not([multiple]) {
        height: calc(2.875rem + 2px)
    }

    .form-group {
        margin-bottom: 1rem
    }

    .form-text {
        display: block;
        margin-top: .25rem
    }

    .form-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px
    }

    .form-row > .col, .form-row > [class*=col-] {
        padding-right: 5px;
        padding-left: 5px
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem
    }

    .form-check-input {
        position: absolute;
        margin-top: .3rem;
        margin-left: -1.25rem
    }

    .form-check-input:disabled ~ .form-check-label {
        color: #6c757d
    }

    .form-check-label {
        margin-bottom: 0
    }

    .form-check-inline {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
        margin-right: .75rem
    }

    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: .3125rem;
        margin-left: 0
    }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #28a745
    }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(40, 167, 69, .8);
        border-radius: .2rem
    }

    .custom-select.is-valid, .form-control.is-valid, .was-validated .custom-select:valid, .was-validated .form-control:valid {
        border-color: #28a745
    }

    .custom-select.is-valid:focus, .form-control.is-valid:focus, .was-validated .custom-select:valid:focus, .was-validated .form-control:valid:focus {
        border-color: #28a745;
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .custom-select.is-valid ~ .valid-feedback, .custom-select.is-valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback, .form-control.is-valid ~ .valid-tooltip, .was-validated .custom-select:valid ~ .valid-feedback, .was-validated .custom-select:valid ~ .valid-tooltip, .was-validated .form-control:valid ~ .valid-feedback, .was-validated .form-control:valid ~ .valid-tooltip {
        display: block
    }

    .form-check-input.is-valid ~ .form-check-label, .was-validated .form-check-input:valid ~ .form-check-label {
        color: #28a745
    }

    .form-check-input.is-valid ~ .valid-feedback, .form-check-input.is-valid ~ .valid-tooltip, .was-validated .form-check-input:valid ~ .valid-feedback, .was-validated .form-check-input:valid ~ .valid-tooltip {
        display: block
    }

    .custom-control-input.is-valid ~ .custom-control-label, .was-validated .custom-control-input:valid ~ .custom-control-label {
        color: #28a745
    }

    .custom-control-input.is-valid ~ .custom-control-label::before, .was-validated .custom-control-input:valid ~ .custom-control-label::before {
        background-color: #71dd8a
    }

    .custom-control-input.is-valid ~ .valid-feedback, .custom-control-input.is-valid ~ .valid-tooltip, .was-validated .custom-control-input:valid ~ .valid-feedback, .was-validated .custom-control-input:valid ~ .valid-tooltip {
        display: block
    }

    .custom-control-input.is-valid:checked ~ .custom-control-label::before, .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before {
        background-color: #34ce57
    }

    .custom-control-input.is-valid:focus ~ .custom-control-label::before, .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .custom-file-input.is-valid ~ .custom-file-label, .was-validated .custom-file-input:valid ~ .custom-file-label {
        border-color: #28a745
    }

    .custom-file-input.is-valid ~ .custom-file-label::before, .was-validated .custom-file-input:valid ~ .custom-file-label::before {
        border-color: inherit
    }

    .custom-file-input.is-valid ~ .valid-feedback, .custom-file-input.is-valid ~ .valid-tooltip, .was-validated .custom-file-input:valid ~ .valid-feedback, .was-validated .custom-file-input:valid ~ .valid-tooltip {
        display: block
    }

    .custom-file-input.is-valid:focus ~ .custom-file-label, .was-validated .custom-file-input:valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #dc3545
    }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(220, 53, 69, .8);
        border-radius: .2rem
    }

    .custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
        border-color: #dc3545
    }

    .custom-select.is-invalid:focus, .form-control.is-invalid:focus, .was-validated .custom-select:invalid:focus, .was-validated .form-control:invalid:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .custom-select.is-invalid ~ .invalid-feedback, .custom-select.is-invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .form-control.is-invalid ~ .invalid-tooltip, .was-validated .custom-select:invalid ~ .invalid-feedback, .was-validated .custom-select:invalid ~ .invalid-tooltip, .was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .form-control:invalid ~ .invalid-tooltip {
        display: block
    }

    .form-check-input.is-invalid ~ .form-check-label, .was-validated .form-check-input:invalid ~ .form-check-label {
        color: #dc3545
    }

    .form-check-input.is-invalid ~ .invalid-feedback, .form-check-input.is-invalid ~ .invalid-tooltip, .was-validated .form-check-input:invalid ~ .invalid-feedback, .was-validated .form-check-input:invalid ~ .invalid-tooltip {
        display: block
    }

    .custom-control-input.is-invalid ~ .custom-control-label, .was-validated .custom-control-input:invalid ~ .custom-control-label {
        color: #dc3545
    }

    .custom-control-input.is-invalid ~ .custom-control-label::before, .was-validated .custom-control-input:invalid ~ .custom-control-label::before {
        background-color: #efa2a9
    }

    .custom-control-input.is-invalid ~ .invalid-feedback, .custom-control-input.is-invalid ~ .invalid-tooltip, .was-validated .custom-control-input:invalid ~ .invalid-feedback, .was-validated .custom-control-input:invalid ~ .invalid-tooltip {
        display: block
    }

    .custom-control-input.is-invalid:checked ~ .custom-control-label::before, .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before {
        background-color: #e4606d
    }

    .custom-control-input.is-invalid:focus ~ .custom-control-label::before, .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .custom-file-input.is-invalid ~ .custom-file-label, .was-validated .custom-file-input:invalid ~ .custom-file-label {
        border-color: #dc3545
    }

    .custom-file-input.is-invalid ~ .custom-file-label::before, .was-validated .custom-file-input:invalid ~ .custom-file-label::before {
        border-color: inherit
    }

    .custom-file-input.is-invalid ~ .invalid-feedback, .custom-file-input.is-invalid ~ .invalid-tooltip, .was-validated .custom-file-input:invalid ~ .invalid-feedback, .was-validated .custom-file-input:invalid ~ .invalid-tooltip {
        display: block
    }

    .custom-file-input.is-invalid:focus ~ .custom-file-label, .was-validated .custom-file-input:invalid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
    }

    .form-inline {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .form-inline .form-check {
        width: 100%
    }

    @media (min-width: 576px) {
        .form-inline label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 0
        }

        .form-inline .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .form-inline .form-control-plaintext {
            display: inline-block
        }

        .form-inline .input-group {
            width: auto
        }

        .form-inline .form-check {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            padding-left: 0
        }

        .form-inline .form-check-input {
            position: relative;
            margin-top: 0;
            margin-right: .25rem;
            margin-left: 0
        }

        .form-inline .custom-control {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .form-inline .custom-control-label {
            margin-bottom: 0
        }
    }

    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    .btn:focus, .btn:hover {
        text-decoration: none
    }

    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .btn.disabled, .btn:disabled {
        opacity: .65
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    .btn:not(:disabled):not(.disabled).active, .btn:not(:disabled):not(.disabled):active {
        background-image: none
    }

    a.btn.disabled, fieldset:disabled a.btn {
        pointer-events: none
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc
    }

    .btn-primary.focus, .btn-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
    }

    .btn-primary.disabled, .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #0062cc;
        border-color: #005cbf
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62
    }

    .btn-secondary.focus, .btn-secondary:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active, .show > .btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b
    }

    .btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745
    }

    .btn-success:hover {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34
    }

    .btn-success.focus, .btn-success:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
    }

    .btn-success.disabled, .btn-success:disabled {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745
    }

    .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show > .btn-success.dropdown-toggle {
        color: #fff;
        background-color: #1e7e34;
        border-color: #1c7430
    }

    .btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus, .show > .btn-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
    }

    .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-info:hover {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b
    }

    .btn-info.focus, .btn-info:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-info.disabled, .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active, .show > .btn-info.dropdown-toggle {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f
    }

    .btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus, .show > .btn-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-warning:hover {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00
    }

    .btn-warning.focus, .btn-warning:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-warning.disabled, .btn-warning:disabled {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active, .show > .btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #d39e00;
        border-color: #c69500
    }

    .btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130
    }

    .btn-danger.focus, .btn-danger:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-danger.disabled, .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active, .show > .btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d
    }

    .btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5
    }

    .btn-light.focus, .btn-light:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-light.disabled, .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show > .btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df
    }

    .btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show > .btn-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124
    }

    .btn-dark.focus, .btn-dark:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-dark.disabled, .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active, .show > .btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d
    }

    .btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-outline-primary {
        color: #007bff;
        background-color: transparent;
        background-image: none;
        border-color: #007bff
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-outline-primary.focus, .btn-outline-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
    }

    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #007bff;
        background-color: transparent
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active, .show > .btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
    }

    .btn-outline-secondary {
        color: #6c757d;
        background-color: transparent;
        background-image: none;
        border-color: #6c757d
    }

    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-outline-secondary.focus, .btn-outline-secondary:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent
    }

    .btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active, .show > .btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d
    }

    .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
    }

    .btn-outline-success {
        color: #28a745;
        background-color: transparent;
        background-image: none;
        border-color: #28a745
    }

    .btn-outline-success:hover {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745
    }

    .btn-outline-success.focus, .btn-outline-success:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
    }

    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #28a745;
        background-color: transparent
    }

    .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show > .btn-outline-success.dropdown-toggle {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745
    }

    .btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
    }

    .btn-outline-info {
        color: #17a2b8;
        background-color: transparent;
        background-image: none;
        border-color: #17a2b8
    }

    .btn-outline-info:hover {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-outline-info.focus, .btn-outline-info:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #17a2b8;
        background-color: transparent
    }

    .btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active, .show > .btn-outline-info.dropdown-toggle {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8
    }

    .btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
    }

    .btn-outline-warning {
        color: #ffc107;
        background-color: transparent;
        background-image: none;
        border-color: #ffc107
    }

    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-outline-warning.focus, .btn-outline-warning:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #ffc107;
        background-color: transparent
    }

    .btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active, .show > .btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107
    }

    .btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
    }

    .btn-outline-danger {
        color: #dc3545;
        background-color: transparent;
        background-image: none;
        border-color: #dc3545
    }

    .btn-outline-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-outline-danger.focus, .btn-outline-danger:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent
    }

    .btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active, .show > .btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545
    }

    .btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
    }

    .btn-outline-light {
        color: #f8f9fa;
        background-color: transparent;
        background-image: none;
        border-color: #f8f9fa
    }

    .btn-outline-light:hover {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-outline-light.focus, .btn-outline-light:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent
    }

    .btn-outline-light:not(:disabled):not(.disabled).active, .btn-outline-light:not(:disabled):not(.disabled):active, .show > .btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa
    }

    .btn-outline-light:not(:disabled):not(.disabled).active:focus, .btn-outline-light:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
    }

    .btn-outline-dark {
        color: #343a40;
        background-color: transparent;
        background-image: none;
        border-color: #343a40
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-outline-dark.focus, .btn-outline-dark:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active, .show > .btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .show > .btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
    }

    .btn-link {
        font-weight: 400;
        color: #007bff;
        background-color: transparent
    }

    .btn-link:hover {
        color: #0056b3;
        text-decoration: underline;
        background-color: transparent;
        border-color: transparent
    }

    .btn-link.focus, .btn-link:focus {
        text-decoration: underline;
        border-color: transparent;
        box-shadow: none
    }

    .btn-link.disabled, .btn-link:disabled {
        color: #6c757d
    }

    .btn-group-lg > .btn, .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem
    }

    .btn-group-sm > .btn, .btn-sm {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
        border-radius: .2rem
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block + .btn-block {
        margin-top: .5rem
    }

    input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
        width: 100%
    }

    .fade {
        opacity: 0;
        transition: opacity .15s linear
    }

    .fade.show {
        opacity: 1
    }

    .collapse {
        display: none
    }

    .collapse.show {
        display: block
    }

    tr.collapse.show {
        display: table-row
    }

    tbody.collapse.show {
        display: table-row-group
    }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        transition: height .35s ease
    }

    .dropdown, .dropup {
        position: relative
    }

    .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid;
        border-right: .3em solid transparent;
        border-bottom: 0;
        border-left: .3em solid transparent
    }

    .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: .25rem
    }

    .dropup .dropdown-menu {
        margin-top: 0;
        margin-bottom: .125rem
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: 0;
        border-right: .3em solid transparent;
        border-bottom: .3em solid;
        border-left: .3em solid transparent
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropright .dropdown-menu {
        margin-top: 0;
        margin-left: .125rem
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid transparent;
        border-bottom: .3em solid transparent;
        border-left: .3em solid
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropright .dropdown-toggle::after {
        vertical-align: 0
    }

    .dropleft .dropdown-menu {
        margin-top: 0;
        margin-right: .125rem
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .255em;
        vertical-align: .255em;
        content: ""
    }

    .dropleft .dropdown-toggle::after {
        display: none
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        width: 0;
        height: 0;
        margin-right: .255em;
        vertical-align: .255em;
        content: "";
        border-top: .3em solid transparent;
        border-right: .3em solid;
        border-bottom: .3em solid transparent
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0
    }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0
    }

    .dropdown-divider {
        height: 0;
        margin: .5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0
    }

    .dropdown-item:focus, .dropdown-item:hover {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa
    }

    .dropdown-item.active, .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #007bff
    }

    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #6c757d;
        background-color: transparent
    }

    .dropdown-menu.show {
        display: block
    }

    .dropdown-header {
        display: block;
        padding: .5rem 1.5rem;
        margin-bottom: 0;
        font-size: .875rem;
        color: #6c757d;
        white-space: nowrap
    }

    .btn-group, .btn-group-vertical {
        position: relative;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle
    }

    .btn-group-vertical > .btn, .btn-group > .btn {
        position: relative;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto
    }

    .btn-group-vertical > .btn:hover, .btn-group > .btn:hover {
        z-index: 1
    }

    .btn-group-vertical > .btn.active, .btn-group-vertical > .btn:active, .btn-group-vertical > .btn:focus, .btn-group > .btn.active, .btn-group > .btn:active, .btn-group > .btn:focus {
        z-index: 1
    }

    .btn-group .btn + .btn, .btn-group .btn + .btn-group, .btn-group .btn-group + .btn, .btn-group .btn-group + .btn-group, .btn-group-vertical .btn + .btn, .btn-group-vertical .btn + .btn-group, .btn-group-vertical .btn-group + .btn, .btn-group-vertical .btn-group + .btn-group {
        margin-left: -1px
    }

    .btn-toolbar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .btn-toolbar .input-group {
        width: auto
    }

    .btn-group > .btn:first-child {
        margin-left: 0
    }

    .btn-group > .btn-group:not(:last-child) > .btn, .btn-group > .btn:not(:last-child):not(.dropdown-toggle) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .btn-group > .btn-group:not(:first-child) > .btn, .btn-group > .btn:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .dropdown-toggle-split {
        padding-right: .5625rem;
        padding-left: .5625rem
    }

    .dropdown-toggle-split::after {
        margin-left: 0
    }

    .btn-group-sm > .btn + .dropdown-toggle-split, .btn-sm + .dropdown-toggle-split {
        padding-right: .375rem;
        padding-left: .375rem
    }

    .btn-group-lg > .btn + .dropdown-toggle-split, .btn-lg + .dropdown-toggle-split {
        padding-right: .75rem;
        padding-left: .75rem
    }

    .btn-group-vertical {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .btn-group-vertical .btn, .btn-group-vertical .btn-group {
        width: 100%
    }

    .btn-group-vertical > .btn + .btn, .btn-group-vertical > .btn + .btn-group, .btn-group-vertical > .btn-group + .btn, .btn-group-vertical > .btn-group + .btn-group {
        margin-top: -1px;
        margin-left: 0
    }

    .btn-group-vertical > .btn-group:not(:last-child) > .btn, .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0
    }

    .btn-group-vertical > .btn-group:not(:first-child) > .btn, .btn-group-vertical > .btn:not(:first-child) {
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .btn-group-toggle > .btn, .btn-group-toggle > .btn-group > .btn {
        margin-bottom: 0
    }

    .btn-group-toggle > .btn input[type=checkbox], .btn-group-toggle > .btn input[type=radio], .btn-group-toggle > .btn-group > .btn input[type=checkbox], .btn-group-toggle > .btn-group > .btn input[type=radio] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none
    }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%
    }

    .input-group > .custom-file, .input-group > .custom-select, .input-group > .form-control {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0
    }

    .input-group > .custom-file:focus, .input-group > .custom-select:focus, .input-group > .form-control:focus {
        z-index: 3
    }

    .input-group > .custom-file + .custom-file, .input-group > .custom-file + .custom-select, .input-group > .custom-file + .form-control, .input-group > .custom-select + .custom-file, .input-group > .custom-select + .custom-select, .input-group > .custom-select + .form-control, .input-group > .form-control + .custom-file, .input-group > .form-control + .custom-select, .input-group > .form-control + .form-control {
        margin-left: -1px
    }

    .input-group > .custom-select:not(:last-child), .input-group > .form-control:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group > .custom-select:not(:first-child), .input-group > .form-control:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group > .custom-file {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .input-group > .custom-file:not(:last-child) .custom-file-label, .input-group > .custom-file:not(:last-child) .custom-file-label::before {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group > .custom-file:not(:first-child) .custom-file-label, .input-group > .custom-file:not(:first-child) .custom-file-label::before {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .input-group-append, .input-group-prepend {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    .input-group-append .btn, .input-group-prepend .btn {
        position: relative;
        z-index: 2
    }

    .input-group-append .btn + .btn, .input-group-append .btn + .input-group-text, .input-group-append .input-group-text + .btn, .input-group-append .input-group-text + .input-group-text, .input-group-prepend .btn + .btn, .input-group-prepend .btn + .input-group-text, .input-group-prepend .input-group-text + .btn, .input-group-prepend .input-group-text + .input-group-text {
        margin-left: -1px
    }

    .input-group-prepend {
        margin-right: -1px
    }

    .input-group-append {
        margin-left: -1px
    }

    .input-group-text {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: .375rem .75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: .25rem
    }

    .input-group-text input[type=checkbox], .input-group-text input[type=radio] {
        margin-top: 0
    }

    .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle), .input-group > .input-group-append:last-child > .input-group-text:not(:last-child), .input-group > .input-group-append:not(:last-child) > .btn, .input-group > .input-group-append:not(:last-child) > .input-group-text, .input-group > .input-group-prepend > .btn, .input-group > .input-group-prepend > .input-group-text {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0
    }

    .input-group > .input-group-append > .btn, .input-group > .input-group-append > .input-group-text, .input-group > .input-group-prepend:first-child > .btn:not(:first-child), .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child), .input-group > .input-group-prepend:not(:first-child) > .btn, .input-group > .input-group-prepend:not(:first-child) > .input-group-text {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem
    }

    .custom-control-inline {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        margin-right: 1rem
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        background-color: #007bff
    }

    .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fff, 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .custom-control-input:active ~ .custom-control-label::before {
        color: #fff;
        background-color: #b3d7ff
    }

    .custom-control-input:disabled ~ .custom-control-label {
        color: #6c757d
    }

    .custom-control-input:disabled ~ .custom-control-label::before {
        background-color: #e9ecef
    }

    .custom-control-label {
        margin-bottom: 0
    }

    .custom-control-label::before {
        position: absolute;
        top: .25rem;
        left: 0;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #dee2e6
    }

    .custom-control-label::after {
        position: absolute;
        top: .25rem;
        left: 0;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 50% 50%
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: .25rem
    }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #007bff
    }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E")
    }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
        background-color: #007bff
    }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23fff' d='M0 2h4'/%3E%3C/svg%3E")
    }

    .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, .5)
    }

    .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, .5)
    }

    .custom-radio .custom-control-label::before {
        border-radius: 50%
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #007bff
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E")
    }

    .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, .5)
    }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: .375rem 1.75rem .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
        background-size: 8px 10px;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none
    }

    .custom-select:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, .075), 0 0 5px rgba(128, 189, 255, .5)
    }

    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: #fff
    }

    .custom-select[multiple], .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: .75rem;
        background-image: none
    }

    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef
    }

    .custom-select::-ms-expand {
        opacity: 0
    }

    .custom-select-sm {
        height: calc(1.8125rem + 2px);
        padding-top: .375rem;
        padding-bottom: .375rem;
        font-size: 75%
    }

    .custom-select-lg {
        height: calc(2.875rem + 2px);
        padding-top: .375rem;
        padding-bottom: .375rem;
        font-size: 125%
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(2.25rem + 2px);
        margin-bottom: 0
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(2.25rem + 2px);
        margin: 0;
        opacity: 0
    }

    .custom-file-input:focus ~ .custom-file-control {
        border-color: #80bdff;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .custom-file-input:focus ~ .custom-file-control::before {
        border-color: #80bdff
    }

    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse"
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(2.25rem + 2px);
        padding: .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(calc(2.25rem + 2px) - 1px * 2);
        padding: .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: 1px solid #ced4da;
        border-radius: 0 .25rem .25rem 0
    }

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .nav-link {
        display: block;
        padding: .5rem 1rem
    }

    .nav-link:focus, .nav-link:hover {
        text-decoration: none
    }

    .nav-link.disabled {
        color: #6c757d
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px
    }

    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover {
        border-color: #e9ecef #e9ecef #dee2e6
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .nav-pills .nav-link {
        border-radius: .25rem
    }

    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
        color: #fff;
        background-color: #007bff
    }

    .nav-fill .nav-item {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        text-align: center
    }

    .nav-justified .nav-item {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        text-align: center
    }

    .tab-content > .tab-pane {
        display: none
    }

    .tab-content > .active {
        display: block
    }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: .5rem 1rem
    }

    .navbar > .container, .navbar > .container-fluid {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .3125rem;
        padding-bottom: .3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap
    }

    .navbar-brand:focus, .navbar-brand:hover {
        text-decoration: none
    }

    .navbar-nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none
    }

    .navbar-text {
        display: inline-block;
        padding-top: .5rem;
        padding-bottom: .5rem
    }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .navbar-toggler {
        padding: .25rem .75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: .25rem
    }

    .navbar-toggler:focus, .navbar-toggler:hover {
        text-decoration: none
    }

    .navbar-toggler:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%
    }

    @media (max-width: 575.98px) {
        .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-sm .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-sm .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-sm > .container, .navbar-expand-sm > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-sm .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand-sm .navbar-toggler {
            display: none
        }

        .navbar-expand-sm .dropup .dropdown-menu {
            top: auto;
            bottom: 100%
        }
    }

    @media (max-width: 767.98px) {
        .navbar-expand-md > .container, .navbar-expand-md > .container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width: 768px) {
        .navbar-expand-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-md .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-md .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-md > .container, .navbar-expand-md > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-md .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand-md .navbar-toggler {
            display: none
        }

        .navbar-expand-md .dropup .dropdown-menu {
            top: auto;
            bottom: 100%
        }
    }

    @media (max-width: 991.98px) {
        .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand-lg .navbar-toggler {
            display: none
        }

        .navbar-expand-lg .dropup .dropdown-menu {
            top: auto;
            bottom: 100%
        }
    }

    @media (max-width: 1199.98px) {
        .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .navbar-expand-xl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-xl .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto
        }

        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-expand-xl > .container, .navbar-expand-xl > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap
        }

        .navbar-expand-xl .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto
        }

        .navbar-expand-xl .navbar-toggler {
            display: none
        }

        .navbar-expand-xl .dropup .dropdown-menu {
            top: auto;
            bottom: 100%
        }
    }

    .navbar-expand {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start
    }

    .navbar-expand > .container, .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row
    }

    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .navbar-expand .navbar-nav .nav-link {
        padding-right: .5rem;
        padding-left: .5rem
    }

    .navbar-expand > .container, .navbar-expand > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap
    }

    .navbar-expand .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto
    }

    .navbar-expand .navbar-toggler {
        display: none
    }

    .navbar-expand .dropup .dropdown-menu {
        top: auto;
        bottom: 100%
    }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
        color: rgba(0, 0, 0, .7)
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, .3)
    }

    .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, .5);
        border-color: rgba(0, 0, 0, .1)
    }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, .5)
    }

    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-light .navbar-text a:focus, .navbar-light .navbar-text a:hover {
        color: rgba(0, 0, 0, .9)
    }

    .navbar-dark .navbar-brand {
        color: #fff
    }

    .navbar-dark .navbar-brand:focus, .navbar-dark .navbar-brand:hover {
        color: #fff
    }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
        color: rgba(255, 255, 255, .75)
    }

    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, .25)
    }

    .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link {
        color: #fff
    }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, .5);
        border-color: rgba(255, 255, 255, .1)
    }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
    }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, .5)
    }

    .navbar-dark .navbar-text a {
        color: #fff
    }

    .navbar-dark .navbar-text a:focus, .navbar-dark .navbar-text a:hover {
        color: #fff
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem
    }

    .card > hr {
        margin-right: 0;
        margin-left: 0
    }

    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card-title {
        margin-bottom: .75rem
    }

    .card-subtitle {
        margin-top: -.375rem;
        margin-bottom: 0
    }

    .card-text:last-child {
        margin-bottom: 0
    }

    .card-link:hover {
        text-decoration: none
    }

    .card-link + .card-link {
        margin-left: 1.25rem
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125)
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
    }

    .card-header + .list-group .list-group-item:first-child {
        border-top: 0
    }

    .card-footer {
        padding: .75rem 1.25rem;
        background-color: rgba(0, 0, 0, .03);
        border-top: 1px solid rgba(0, 0, 0, .125)
    }

    .card-footer:last-child {
        border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
    }

    .card-header-tabs {
        margin-right: -.625rem;
        margin-bottom: -.75rem;
        margin-left: -.625rem;
        border-bottom: 0
    }

    .card-header-pills {
        margin-right: -.625rem;
        margin-left: -.625rem
    }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem
    }

    .card-img {
        width: 100%;
        border-radius: calc(.25rem - 1px)
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px)
    }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(.25rem - 1px);
        border-bottom-left-radius: calc(.25rem - 1px)
    }

    .card-deck {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .card-deck .card {
        margin-bottom: 15px
    }

    @media (min-width: 576px) {
        .card-deck {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .card-deck .card {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px
        }
    }

    .card-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .card-group > .card {
        margin-bottom: 15px
    }

    @media (min-width: 576px) {
        .card-group {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap
        }

        .card-group > .card {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            margin-bottom: 0
        }

        .card-group > .card + .card {
            margin-left: 0;
            border-left: 0
        }

        .card-group > .card:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .card-group > .card:first-child .card-header, .card-group > .card:first-child .card-img-top {
            border-top-right-radius: 0
        }

        .card-group > .card:first-child .card-footer, .card-group > .card:first-child .card-img-bottom {
            border-bottom-right-radius: 0
        }

        .card-group > .card:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .card-group > .card:last-child .card-header, .card-group > .card:last-child .card-img-top {
            border-top-left-radius: 0
        }

        .card-group > .card:last-child .card-footer, .card-group > .card:last-child .card-img-bottom {
            border-bottom-left-radius: 0
        }

        .card-group > .card:only-child {
            border-radius: .25rem
        }

        .card-group > .card:only-child .card-header, .card-group > .card:only-child .card-img-top {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card-group > .card:only-child .card-footer, .card-group > .card:only-child .card-img-bottom {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
            border-radius: 0
        }

        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom, .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
            border-radius: 0
        }
    }

    .card-columns .card {
        margin-bottom: .75rem
    }

    @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1.25rem;
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem
        }

        .card-columns .card {
            display: inline-block;
            width: 100%
        }
    }

    .breadcrumb {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: .75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: .5rem;
        padding-left: .5rem;
        color: #6c757d;
        content: "/"
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: underline
    }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: none
    }

    .breadcrumb-item.active {
        color: #6c757d
    }

    .pagination {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: .25rem
    }

    .page-link {
        position: relative;
        display: block;
        padding: .5rem .75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6
    }

    .page-link:hover {
        color: #0056b3;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6
    }

    .page-link:focus {
        z-index: 2;
        outline: 0;
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
    }

    .page-link:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .page-item:last-child .page-link {
        border-top-right-radius: .25rem;
        border-bottom-right-radius: .25rem
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #fff;
        border-color: #dee2e6
    }

    .pagination-lg .page-link {
        padding: .75rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1.5
    }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: .3rem;
        border-bottom-left-radius: .3rem
    }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem
    }

    .pagination-sm .page-link {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: .2rem;
        border-bottom-left-radius: .2rem
    }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: .2rem;
        border-bottom-right-radius: .2rem
    }

    .badge {
        display: inline-block;
        padding: .25em .4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25rem
    }

    .badge:empty {
        display: none
    }

    .btn .badge {
        position: relative;
        top: -1px
    }

    .badge-pill {
        padding-right: .6em;
        padding-left: .6em;
        border-radius: 10rem
    }

    .badge-primary {
        color: #fff;
        background-color: #007bff
    }

    .badge-primary[href]:focus, .badge-primary[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #0062cc
    }

    .badge-secondary {
        color: #fff;
        background-color: #6c757d
    }

    .badge-secondary[href]:focus, .badge-secondary[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #545b62
    }

    .badge-success {
        color: #fff;
        background-color: #28a745
    }

    .badge-success[href]:focus, .badge-success[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #1e7e34
    }

    .badge-info {
        color: #fff;
        background-color: #17a2b8
    }

    .badge-info[href]:focus, .badge-info[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #117a8b
    }

    .badge-warning {
        color: #212529;
        background-color: #ffc107
    }

    .badge-warning[href]:focus, .badge-warning[href]:hover {
        color: #212529;
        text-decoration: none;
        background-color: #d39e00
    }

    .badge-danger {
        color: #fff;
        background-color: #dc3545
    }

    .badge-danger[href]:focus, .badge-danger[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #bd2130
    }

    .badge-light {
        color: #212529;
        background-color: #f8f9fa
    }

    .badge-light[href]:focus, .badge-light[href]:hover {
        color: #212529;
        text-decoration: none;
        background-color: #dae0e5
    }

    .badge-dark {
        color: #fff;
        background-color: #343a40
    }

    .badge-dark[href]:focus, .badge-dark[href]:hover {
        color: #fff;
        text-decoration: none;
        background-color: #1d2124
    }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: .3rem
    }

    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem
        }
    }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0
    }

    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem
    }

    .alert-heading {
        color: inherit
    }

    .alert-link {
        font-weight: 700
    }

    .alert-dismissible {
        padding-right: 4rem
    }

    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: .75rem 1.25rem;
        color: inherit
    }

    .alert-primary {
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff
    }

    .alert-primary hr {
        border-top-color: #9fcdff
    }

    .alert-primary .alert-link {
        color: #002752
    }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db
    }

    .alert-secondary hr {
        border-top-color: #c8cbcf
    }

    .alert-secondary .alert-link {
        color: #202326
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb
    }

    .alert-success hr {
        border-top-color: #b1dfbb
    }

    .alert-success .alert-link {
        color: #0b2e13
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb
    }

    .alert-info hr {
        border-top-color: #abdde5
    }

    .alert-info .alert-link {
        color: #062c33
    }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba
    }

    .alert-warning hr {
        border-top-color: #ffe8a1
    }

    .alert-warning .alert-link {
        color: #533f03
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb
    }

    .alert-danger hr {
        border-top-color: #f1b0b7
    }

    .alert-danger .alert-link {
        color: #491217
    }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe
    }

    .alert-light hr {
        border-top-color: #ececf6
    }

    .alert-light .alert-link {
        color: #686868
    }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca
    }

    .alert-dark hr {
        border-top-color: #b9bbbe
    }

    .alert-dark .alert-link {
        color: #040505
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0
        }
        to {
            background-position: 0 0
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0
        }
        to {
            background-position: 0 0
        }
    }

    .progress {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: .75rem;
        background-color: #e9ecef;
        border-radius: .25rem
    }

    .progress-bar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        background-color: #007bff;
        transition: width .6s ease
    }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem
    }

    .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
        animation: progress-bar-stripes 1s linear infinite
    }

    .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start
    }

    .media-body {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1
    }

    .list-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0
    }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit
    }

    .list-group-item-action:focus, .list-group-item-action:hover {
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa
    }

    .list-group-item-action:active {
        color: #212529;
        background-color: #e9ecef
    }

    .list-group-item {
        position: relative;
        display: block;
        padding: .75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .125)
    }

    .list-group-item:first-child {
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem
    }

    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: .25rem;
        border-bottom-left-radius: .25rem
    }

    .list-group-item:focus, .list-group-item:hover {
        z-index: 1;
        text-decoration: none
    }

    .list-group-item.disabled, .list-group-item:disabled {
        color: #6c757d;
        background-color: #fff
    }

    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff
    }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0
    }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0
    }

    .list-group-flush:last-child .list-group-item:last-child {
        border-bottom: 0
    }

    .list-group-item-primary {
        color: #004085;
        background-color: #b8daff
    }

    .list-group-item-primary.list-group-item-action:focus, .list-group-item-primary.list-group-item-action:hover {
        color: #004085;
        background-color: #9fcdff
    }

    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #004085;
        border-color: #004085
    }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db
    }

    .list-group-item-secondary.list-group-item-action:focus, .list-group-item-secondary.list-group-item-action:hover {
        color: #383d41;
        background-color: #c8cbcf
    }

    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383d41;
        border-color: #383d41
    }

    .list-group-item-success {
        color: #155724;
        background-color: #c3e6cb
    }

    .list-group-item-success.list-group-item-action:focus, .list-group-item-success.list-group-item-action:hover {
        color: #155724;
        background-color: #b1dfbb
    }

    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #155724;
        border-color: #155724
    }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb
    }

    .list-group-item-info.list-group-item-action:focus, .list-group-item-info.list-group-item-action:hover {
        color: #0c5460;
        background-color: #abdde5
    }

    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #0c5460;
        border-color: #0c5460
    }

    .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba
    }

    .list-group-item-warning.list-group-item-action:focus, .list-group-item-warning.list-group-item-action:hover {
        color: #856404;
        background-color: #ffe8a1
    }

    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #856404;
        border-color: #856404
    }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb
    }

    .list-group-item-danger.list-group-item-action:focus, .list-group-item-danger.list-group-item-action:hover {
        color: #721c24;
        background-color: #f1b0b7
    }

    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #721c24;
        border-color: #721c24
    }

    .list-group-item-light {
        color: #818182;
        background-color: #fdfdfe
    }

    .list-group-item-light.list-group-item-action:focus, .list-group-item-light.list-group-item-action:hover {
        color: #818182;
        background-color: #ececf6
    }

    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #818182;
        border-color: #818182
    }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca
    }

    .list-group-item-dark.list-group-item-action:focus, .list-group-item-dark.list-group-item-action:hover {
        color: #1b1e21;
        background-color: #b9bbbe
    }

    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    }

    .close:focus, .close:hover {
        color: #000;
        text-decoration: none;
        opacity: .75
    }

    .close:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none
    }

    .modal-open {
        overflow: hidden
    }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        outline: 0
    }

    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: .5rem;
        pointer-events: none
    }

    .modal.fade .modal-dialog {
        transition: -webkit-transform .3s ease-out;
        transition: transform .3s ease-out;
        transition: transform .3s ease-out, -webkit-transform .3s ease-out;
        -webkit-transform: translate(0, -25%);
        transform: translate(0, -25%)
    }

    .modal.show .modal-dialog {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0)
    }

    .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - (.5rem * 2))
    }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000
    }

    .modal-backdrop.fade {
        opacity: 0
    }

    .modal-backdrop.show {
        opacity: .5
    }

    .modal-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
        border-top-left-radius: .3rem;
        border-top-right-radius: .3rem
    }

    .modal-header .close {
        padding: 1rem;
        margin: -1rem -1rem -1rem auto
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5
    }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem
    }

    .modal-footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid #e9ecef
    }

    .modal-footer > :not(:first-child) {
        margin-left: .25rem
    }

    .modal-footer > :not(:last-child) {
        margin-right: .25rem
    }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }

        .modal-dialog-centered {
            min-height: calc(100% - (1.75rem * 2))
        }

        .modal-sm {
            max-width: 300px
        }
    }

    @media (min-width: 992px) {
        .modal-lg {
            max-width: 800px
        }
    }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .875rem;
        word-wrap: break-word;
        opacity: 0
    }

    .tooltip.show {
        opacity: .9
    }

    .tooltip .arrow {
        position: absolute;
        display: block;
        width: .8rem;
        height: .4rem
    }

    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid
    }

    .bs-tooltip-auto[x-placement^=top], .bs-tooltip-top {
        padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=top] .arrow, .bs-tooltip-top .arrow {
        bottom: 0
    }

    .bs-tooltip-auto[x-placement^=top] .arrow::before, .bs-tooltip-top .arrow::before {
        top: 0;
        border-width: .4rem .4rem 0;
        border-top-color: #000
    }

    .bs-tooltip-auto[x-placement^=right], .bs-tooltip-right {
        padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=right] .arrow, .bs-tooltip-right .arrow {
        left: 0;
        width: .4rem;
        height: .8rem
    }

    .bs-tooltip-auto[x-placement^=right] .arrow::before, .bs-tooltip-right .arrow::before {
        right: 0;
        border-width: .4rem .4rem .4rem 0;
        border-right-color: #000
    }

    .bs-tooltip-auto[x-placement^=bottom], .bs-tooltip-bottom {
        padding: .4rem 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .arrow, .bs-tooltip-bottom .arrow {
        top: 0
    }

    .bs-tooltip-auto[x-placement^=bottom] .arrow::before, .bs-tooltip-bottom .arrow::before {
        bottom: 0;
        border-width: 0 .4rem .4rem;
        border-bottom-color: #000
    }

    .bs-tooltip-auto[x-placement^=left], .bs-tooltip-left {
        padding: 0 .4rem
    }

    .bs-tooltip-auto[x-placement^=left] .arrow, .bs-tooltip-left .arrow {
        right: 0;
        width: .4rem;
        height: .8rem
    }

    .bs-tooltip-auto[x-placement^=left] .arrow::before, .bs-tooltip-left .arrow::before {
        left: 0;
        border-width: .4rem 0 .4rem .4rem;
        border-left-color: #000
    }

    .tooltip-inner {
        max-width: 200px;
        padding: .25rem .5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: .25rem
    }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: .875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem
    }

    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: .5rem;
        margin: 0 .3rem
    }

    .popover .arrow::after, .popover .arrow::before {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid
    }

    .bs-popover-auto[x-placement^=top], .bs-popover-top {
        margin-bottom: .5rem
    }

    .bs-popover-auto[x-placement^=top] .arrow, .bs-popover-top .arrow {
        bottom: calc((.5rem + 1px) * -1)
    }

    .bs-popover-auto[x-placement^=top] .arrow::after, .bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::after, .bs-popover-top .arrow::before {
        border-width: .5rem .5rem 0
    }

    .bs-popover-auto[x-placement^=top] .arrow::before, .bs-popover-top .arrow::before {
        bottom: 0;
        border-top-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=top] .arrow::after, .bs-popover-top .arrow::after {
        bottom: 1px;
        border-top-color: #fff
    }

    .bs-popover-auto[x-placement^=right], .bs-popover-right {
        margin-left: .5rem
    }

    .bs-popover-auto[x-placement^=right] .arrow, .bs-popover-right .arrow {
        left: calc((.5rem + 1px) * -1);
        width: .5rem;
        height: 1rem;
        margin: .3rem 0
    }

    .bs-popover-auto[x-placement^=right] .arrow::after, .bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::after, .bs-popover-right .arrow::before {
        border-width: .5rem .5rem .5rem 0
    }

    .bs-popover-auto[x-placement^=right] .arrow::before, .bs-popover-right .arrow::before {
        left: 0;
        border-right-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=right] .arrow::after, .bs-popover-right .arrow::after {
        left: 1px;
        border-right-color: #fff
    }

    .bs-popover-auto[x-placement^=bottom], .bs-popover-bottom {
        margin-top: .5rem
    }

    .bs-popover-auto[x-placement^=bottom] .arrow, .bs-popover-bottom .arrow {
        top: calc((.5rem + 1px) * -1)
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::after, .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::after, .bs-popover-bottom .arrow::before {
        border-width: 0 .5rem .5rem .5rem
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::before, .bs-popover-bottom .arrow::before {
        top: 0;
        border-bottom-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=bottom] .arrow::after, .bs-popover-bottom .arrow::after {
        top: 1px;
        border-bottom-color: #fff
    }

    .bs-popover-auto[x-placement^=bottom] .popover-header::before, .bs-popover-bottom .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7
    }

    .bs-popover-auto[x-placement^=left], .bs-popover-left {
        margin-right: .5rem
    }

    .bs-popover-auto[x-placement^=left] .arrow, .bs-popover-left .arrow {
        right: calc((.5rem + 1px) * -1);
        width: .5rem;
        height: 1rem;
        margin: .3rem 0
    }

    .bs-popover-auto[x-placement^=left] .arrow::after, .bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::after, .bs-popover-left .arrow::before {
        border-width: .5rem 0 .5rem .5rem
    }

    .bs-popover-auto[x-placement^=left] .arrow::before, .bs-popover-left .arrow::before {
        right: 0;
        border-left-color: rgba(0, 0, 0, .25)
    }

    .bs-popover-auto[x-placement^=left] .arrow::after, .bs-popover-left .arrow::after {
        right: 1px;
        border-left-color: #fff
    }

    .popover-header {
        padding: .5rem .75rem;
        margin-bottom: 0;
        font-size: 1rem;
        color: inherit;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(.3rem - 1px);
        border-top-right-radius: calc(.3rem - 1px)
    }

    .popover-header:empty {
        display: none
    }

    .popover-body {
        padding: .5rem .75rem;
        color: #212529
    }

    .carousel {
        position: relative
    }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden
    }

    .carousel-item {
        position: relative;
        display: none;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        transition: -webkit-transform .6s ease;
        transition: transform .6s ease;
        transition: transform .6s ease, -webkit-transform .6s ease;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px
    }

    .carousel-item-next, .carousel-item-prev, .carousel-item.active {
        display: block
    }

    .carousel-item-next, .carousel-item-prev {
        position: absolute;
        top: 0
    }

    .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
        .carousel-item-next.carousel-item-left, .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }
    }

    .active.carousel-item-right, .carousel-item-next {
        -webkit-transform: translateX(100%);
        transform: translateX(100%)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
        .active.carousel-item-right, .carousel-item-next {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0)
        }
    }

    .active.carousel-item-left, .carousel-item-prev {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%)
    }

    @supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {
        .active.carousel-item-left, .carousel-item-prev {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0)
        }
    }

    .carousel-control-next, .carousel-control-prev {
        position: absolute;
        top: 0;
        bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: .5
    }

    .carousel-control-next:focus, .carousel-control-next:hover, .carousel-control-prev:focus, .carousel-control-prev:hover {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9
    }

    .carousel-control-prev {
        left: 0
    }

    .carousel-control-next {
        right: 0
    }

    .carousel-control-next-icon, .carousel-control-prev-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%
    }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
    }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 15;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none
    }

    .carousel-indicators li {
        position: relative;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, .5)
    }

    .carousel-indicators li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""
    }

    .carousel-indicators .active {
        background-color: #fff
    }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center
    }

    .align-baseline {
        vertical-align: baseline !important
    }

    .align-top {
        vertical-align: top !important
    }

    .align-middle {
        vertical-align: middle !important
    }

    .align-bottom {
        vertical-align: bottom !important
    }

    .align-text-bottom {
        vertical-align: text-bottom !important
    }

    .align-text-top {
        vertical-align: text-top !important
    }

    .bg-primary {
        background-color: #007bff !important
    }

    a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover {
        background-color: #0062cc !important
    }

    .bg-secondary {
        background-color: #6c757d !important
    }

    a.bg-secondary:focus, a.bg-secondary:hover, button.bg-secondary:focus, button.bg-secondary:hover {
        background-color: #545b62 !important
    }

    .bg-success {
        background-color: #28a745 !important
    }

    a.bg-success:focus, a.bg-success:hover, button.bg-success:focus, button.bg-success:hover {
        background-color: #1e7e34 !important
    }

    .bg-info {
        background-color: #17a2b8 !important
    }

    a.bg-info:focus, a.bg-info:hover, button.bg-info:focus, button.bg-info:hover {
        background-color: #117a8b !important
    }

    .bg-warning {
        background-color: #ffc107 !important
    }

    a.bg-warning:focus, a.bg-warning:hover, button.bg-warning:focus, button.bg-warning:hover {
        background-color: #d39e00 !important
    }

    .bg-danger {
        background-color: #dc3545 !important
    }

    a.bg-danger:focus, a.bg-danger:hover, button.bg-danger:focus, button.bg-danger:hover {
        background-color: #bd2130 !important
    }

    .bg-light {
        background-color: #f8f9fa !important
    }

    a.bg-light:focus, a.bg-light:hover, button.bg-light:focus, button.bg-light:hover {
        background-color: #dae0e5 !important
    }

    .bg-dark {
        background-color: #343a40 !important
    }

    a.bg-dark:focus, a.bg-dark:hover, button.bg-dark:focus, button.bg-dark:hover {
        background-color: #1d2124 !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .bg-transparent {
        background-color: transparent !important
    }

    .border {
        border: 1px solid #dee2e6 !important
    }

    .border-top {
        border-top: 1px solid #dee2e6 !important
    }

    .border-right {
        border-right: 1px solid #dee2e6 !important
    }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important
    }

    .border-left {
        border-left: 1px solid #dee2e6 !important
    }

    .border-0 {
        border: 0 !important
    }

    .border-top-0 {
        border-top: 0 !important
    }

    .border-right-0 {
        border-right: 0 !important
    }

    .border-bottom-0 {
        border-bottom: 0 !important
    }

    .border-left-0 {
        border-left: 0 !important
    }

    .border-primary {
        border-color: #007bff !important
    }

    .border-secondary {
        border-color: #6c757d !important
    }

    .border-success {
        border-color: #28a745 !important
    }

    .border-info {
        border-color: #17a2b8 !important
    }

    .border-warning {
        border-color: #ffc107 !important
    }

    .border-danger {
        border-color: #dc3545 !important
    }

    .border-light {
        border-color: #f8f9fa !important
    }

    .border-dark {
        border-color: #343a40 !important
    }

    .border-white {
        border-color: #fff !important
    }

    .rounded {
        border-radius: .25rem !important
    }

    .rounded-top {
        border-top-left-radius: .25rem !important;
        border-top-right-radius: .25rem !important
    }

    .rounded-right {
        border-top-right-radius: .25rem !important;
        border-bottom-right-radius: .25rem !important
    }

    .rounded-bottom {
        border-bottom-right-radius: .25rem !important;
        border-bottom-left-radius: .25rem !important
    }

    .rounded-left {
        border-top-left-radius: .25rem !important;
        border-bottom-left-radius: .25rem !important
    }

    .rounded-circle {
        border-radius: 50% !important
    }

    .rounded-0 {
        border-radius: 0 !important
    }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""
    }

    .d-none {
        display: none !important
    }

    .d-inline {
        display: inline !important
    }

    .d-inline-block {
        display: inline-block !important
    }

    .d-block {
        display: block !important
    }

    .d-table {
        display: table !important
    }

    .d-table-row {
        display: table-row !important
    }

    .d-table-cell {
        display: table-cell !important
    }

    .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important
    }

    .d-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important
    }

    @media (min-width: 576px) {
        .d-sm-none {
            display: none !important
        }

        .d-sm-inline {
            display: inline !important
        }

        .d-sm-inline-block {
            display: inline-block !important
        }

        .d-sm-block {
            display: block !important
        }

        .d-sm-table {
            display: table !important
        }

        .d-sm-table-row {
            display: table-row !important
        }

        .d-sm-table-cell {
            display: table-cell !important
        }

        .d-sm-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }
    }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important
        }

        .d-md-inline {
            display: inline !important
        }

        .d-md-inline-block {
            display: inline-block !important
        }

        .d-md-block {
            display: block !important
        }

        .d-md-table {
            display: table !important
        }

        .d-md-table-row {
            display: table-row !important
        }

        .d-md-table-cell {
            display: table-cell !important
        }

        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }
    }

    @media (min-width: 992px) {
        .d-lg-none {
            display: none !important
        }

        .d-lg-inline {
            display: inline !important
        }

        .d-lg-inline-block {
            display: inline-block !important
        }

        .d-lg-block {
            display: block !important
        }

        .d-lg-table {
            display: table !important
        }

        .d-lg-table-row {
            display: table-row !important
        }

        .d-lg-table-cell {
            display: table-cell !important
        }

        .d-lg-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }
    }

    @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important
        }

        .d-xl-inline {
            display: inline !important
        }

        .d-xl-inline-block {
            display: inline-block !important
        }

        .d-xl-block {
            display: block !important
        }

        .d-xl-table {
            display: table !important
        }

        .d-xl-table-row {
            display: table-row !important
        }

        .d-xl-table-cell {
            display: table-cell !important
        }

        .d-xl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }
    }

    @media print {
        .d-print-none {
            display: none !important
        }

        .d-print-inline {
            display: inline !important
        }

        .d-print-inline-block {
            display: inline-block !important
        }

        .d-print-block {
            display: block !important
        }

        .d-print-table {
            display: table !important
        }

        .d-print-table-row {
            display: table-row !important
        }

        .d-print-table-cell {
            display: table-cell !important
        }

        .d-print-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important
        }
    }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden
    }

    .embed-responsive::before {
        display: block;
        content: ""
    }

    .embed-responsive .embed-responsive-item, .embed-responsive embed, .embed-responsive iframe, .embed-responsive object, .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0
    }

    .embed-responsive-21by9::before {
        padding-top: 42.857143%
    }

    .embed-responsive-16by9::before {
        padding-top: 56.25%
    }

    .embed-responsive-4by3::before {
        padding-top: 75%
    }

    .embed-responsive-1by1::before {
        padding-top: 100%
    }

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important
    }

    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important
    }

    .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important
    }

    .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important
    }

    .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important
    }

    .flex-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important
    }

    .flex-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important
    }

    .justify-content-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important
    }

    .justify-content-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important
    }

    .justify-content-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important
    }

    .justify-content-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important
    }

    .align-items-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important
    }

    .align-items-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important
    }

    .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important
    }

    .align-items-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important
    }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important
    }

    .align-content-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important
    }

    .align-content-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important
    }

    .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important
    }

    .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important
    }

    .align-content-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important
    }

    .align-content-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important
    }

    .align-self-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important
    }

    .align-self-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important
    }

    .align-self-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important
    }

    .align-self-center {
        -ms-flex-item-align: center !important;
        align-self: center !important
    }

    .align-self-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important
    }

    .align-self-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important
    }

    @media (min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-sm-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-sm-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-sm-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-sm-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-sm-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-sm-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-sm-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-sm-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-sm-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-sm-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-sm-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-sm-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }
    }

    @media (min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-md-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-md-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .justify-content-md-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-md-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-md-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-md-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-md-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-md-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-md-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-md-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-md-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-md-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-md-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-md-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-md-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-md-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-md-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }
    }

    @media (min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-lg-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-lg-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-lg-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-lg-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-lg-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-lg-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-lg-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-lg-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-lg-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-lg-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-lg-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-lg-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }
    }

    @media (min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important
        }

        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important
        }

        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important
        }

        .flex-xl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important
        }

        .flex-xl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important
        }

        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important
        }

        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important
        }

        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important
        }

        .justify-content-xl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important
        }

        .align-items-xl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .align-items-xl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important
        }

        .align-items-xl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important
        }

        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important
        }

        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important
        }

        .align-content-xl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important
        }

        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important
        }

        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important
        }

        .align-content-xl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important
        }

        .align-content-xl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important
        }

        .align-self-xl-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important
        }

        .align-self-xl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important
        }

        .align-self-xl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important
        }

        .align-self-xl-center {
            -ms-flex-item-align: center !important;
            align-self: center !important
        }

        .align-self-xl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important
        }

        .align-self-xl-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important
        }
    }

    .float-left {
        float: left !important
    }

    .float-right {
        float: right !important
    }

    .float-none {
        float: none !important
    }

    @media (min-width: 576px) {
        .float-sm-left {
            float: left !important
        }

        .float-sm-right {
            float: right !important
        }

        .float-sm-none {
            float: none !important
        }
    }

    @media (min-width: 768px) {
        .float-md-left {
            float: left !important
        }

        .float-md-right {
            float: right !important
        }

        .float-md-none {
            float: none !important
        }
    }

    @media (min-width: 992px) {
        .float-lg-left {
            float: left !important
        }

        .float-lg-right {
            float: right !important
        }

        .float-lg-none {
            float: none !important
        }
    }

    @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important
        }

        .float-xl-right {
            float: right !important
        }

        .float-xl-none {
            float: none !important
        }
    }

    .position-static {
        position: static !important
    }

    .position-relative {
        position: relative !important
    }

    .position-absolute {
        position: absolute !important
    }

    .position-fixed {
        position: fixed !important
    }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important
    }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030
    }

    .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030
    }

    @supports ((position:-webkit-sticky) or (position:sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        border: 0
    }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
        -webkit-clip-path: none;
        clip-path: none
    }

    .w-25 {
        width: 25% !important
    }

    .w-50 {
        width: 50% !important
    }

    .w-75 {
        width: 75% !important
    }

    .w-100 {
        width: 100% !important
    }

    .h-25 {
        height: 25% !important
    }

    .h-50 {
        height: 50% !important
    }

    .h-75 {
        height: 75% !important
    }

    .h-100 {
        height: 100% !important
    }

    .mw-100 {
        max-width: 100% !important
    }

    .mh-100 {
        max-height: 100% !important
    }

    .m-0 {
        margin: 0 !important
    }

    .mt-0, .my-0 {
        margin-top: 0 !important
    }

    .mr-0, .mx-0 {
        margin-right: 0 !important
    }

    .mb-0, .my-0 {
        margin-bottom: 0 !important
    }

    .ml-0, .mx-0 {
        margin-left: 0 !important
    }

    .m-1 {
        margin: .25rem !important
    }

    .mt-1, .my-1 {
        margin-top: .25rem !important
    }

    .mr-1, .mx-1 {
        margin-right: .25rem !important
    }

    .mb-1, .my-1 {
        margin-bottom: .25rem !important
    }

    .ml-1, .mx-1 {
        margin-left: .25rem !important
    }

    .m-2 {
        margin: .5rem !important
    }

    .mt-2, .my-2 {
        margin-top: .5rem !important
    }

    .mr-2, .mx-2 {
        margin-right: .5rem !important
    }

    .mb-2, .my-2 {
        margin-bottom: .5rem !important
    }

    .ml-2, .mx-2 {
        margin-left: .5rem !important
    }

    .m-3 {
        margin: 1rem !important
    }

    .mt-3, .my-3 {
        margin-top: 1rem !important
    }

    .mr-3, .mx-3 {
        margin-right: 1rem !important
    }

    .mb-3, .my-3 {
        margin-bottom: 1rem !important
    }

    .ml-3, .mx-3 {
        margin-left: 1rem !important
    }

    .m-4 {
        margin: 1.5rem !important
    }

    .mt-4, .my-4 {
        margin-top: 1.5rem !important
    }

    .mr-4, .mx-4 {
        margin-right: 1.5rem !important
    }

    .mb-4, .my-4 {
        margin-bottom: 1.5rem !important
    }

    .ml-4, .mx-4 {
        margin-left: 1.5rem !important
    }

    .m-5 {
        margin: 3rem !important
    }

    .mt-5, .my-5 {
        margin-top: 3rem !important
    }

    .mr-5, .mx-5 {
        margin-right: 3rem !important
    }

    .mb-5, .my-5 {
        margin-bottom: 3rem !important
    }

    .ml-5, .mx-5 {
        margin-left: 3rem !important
    }

    .p-0 {
        padding: 0 !important
    }

    .pt-0, .py-0 {
        padding-top: 0 !important
    }

    .pr-0, .px-0 {
        padding-right: 0 !important
    }

    .pb-0, .py-0 {
        padding-bottom: 0 !important
    }

    .pl-0, .px-0 {
        padding-left: 0 !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .pt-1, .py-1 {
        padding-top: .25rem !important
    }

    .pr-1, .px-1 {
        padding-right: .25rem !important
    }

    .pb-1, .py-1 {
        padding-bottom: .25rem !important
    }

    .pl-1, .px-1 {
        padding-left: .25rem !important
    }

    .p-2 {
        padding: .5rem !important
    }

    .pt-2, .py-2 {
        padding-top: .5rem !important
    }

    .pr-2, .px-2 {
        padding-right: .5rem !important
    }

    .pb-2, .py-2 {
        padding-bottom: .5rem !important
    }

    .pl-2, .px-2 {
        padding-left: .5rem !important
    }

    .p-3 {
        padding: 1rem !important
    }

    .pt-3, .py-3 {
        padding-top: 1rem !important
    }

    .pr-3, .px-3 {
        padding-right: 1rem !important
    }

    .pb-3, .py-3 {
        padding-bottom: 1rem !important
    }

    .pl-3, .px-3 {
        padding-left: 1rem !important
    }

    .p-4 {
        padding: 1.5rem !important
    }

    .pt-4, .py-4 {
        padding-top: 1.5rem !important
    }

    .pr-4, .px-4 {
        padding-right: 1.5rem !important
    }

    .pb-4, .py-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-4, .px-4 {
        padding-left: 1.5rem !important
    }

    .p-5 {
        padding: 3rem !important
    }

    .pt-5, .py-5 {
        padding-top: 3rem !important
    }

    .pr-5, .px-5 {
        padding-right: 3rem !important
    }

    .pb-5, .py-5 {
        padding-bottom: 3rem !important
    }

    .pl-5, .px-5 {
        padding-left: 3rem !important
    }

    .m-auto {
        margin: auto !important
    }

    .mt-auto, .my-auto {
        margin-top: auto !important
    }

    .mr-auto, .mx-auto {
        margin-right: auto !important
    }

    .mb-auto, .my-auto {
        margin-bottom: auto !important
    }

    .ml-auto, .mx-auto {
        margin-left: auto !important
    }

    @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important
        }

        .mt-sm-0, .my-sm-0 {
            margin-top: 0 !important
        }

        .mr-sm-0, .mx-sm-0 {
            margin-right: 0 !important
        }

        .mb-sm-0, .my-sm-0 {
            margin-bottom: 0 !important
        }

        .ml-sm-0, .mx-sm-0 {
            margin-left: 0 !important
        }

        .m-sm-1 {
            margin: .25rem !important
        }

        .mt-sm-1, .my-sm-1 {
            margin-top: .25rem !important
        }

        .mr-sm-1, .mx-sm-1 {
            margin-right: .25rem !important
        }

        .mb-sm-1, .my-sm-1 {
            margin-bottom: .25rem !important
        }

        .ml-sm-1, .mx-sm-1 {
            margin-left: .25rem !important
        }

        .m-sm-2 {
            margin: .5rem !important
        }

        .mt-sm-2, .my-sm-2 {
            margin-top: .5rem !important
        }

        .mr-sm-2, .mx-sm-2 {
            margin-right: .5rem !important
        }

        .mb-sm-2, .my-sm-2 {
            margin-bottom: .5rem !important
        }

        .ml-sm-2, .mx-sm-2 {
            margin-left: .5rem !important
        }

        .m-sm-3 {
            margin: 1rem !important
        }

        .mt-sm-3, .my-sm-3 {
            margin-top: 1rem !important
        }

        .mr-sm-3, .mx-sm-3 {
            margin-right: 1rem !important
        }

        .mb-sm-3, .my-sm-3 {
            margin-bottom: 1rem !important
        }

        .ml-sm-3, .mx-sm-3 {
            margin-left: 1rem !important
        }

        .m-sm-4 {
            margin: 1.5rem !important
        }

        .mt-sm-4, .my-sm-4 {
            margin-top: 1.5rem !important
        }

        .mr-sm-4, .mx-sm-4 {
            margin-right: 1.5rem !important
        }

        .mb-sm-4, .my-sm-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-sm-4, .mx-sm-4 {
            margin-left: 1.5rem !important
        }

        .m-sm-5 {
            margin: 3rem !important
        }

        .mt-sm-5, .my-sm-5 {
            margin-top: 3rem !important
        }

        .mr-sm-5, .mx-sm-5 {
            margin-right: 3rem !important
        }

        .mb-sm-5, .my-sm-5 {
            margin-bottom: 3rem !important
        }

        .ml-sm-5, .mx-sm-5 {
            margin-left: 3rem !important
        }

        .p-sm-0 {
            padding: 0 !important
        }

        .pt-sm-0, .py-sm-0 {
            padding-top: 0 !important
        }

        .pr-sm-0, .px-sm-0 {
            padding-right: 0 !important
        }

        .pb-sm-0, .py-sm-0 {
            padding-bottom: 0 !important
        }

        .pl-sm-0, .px-sm-0 {
            padding-left: 0 !important
        }

        .p-sm-1 {
            padding: .25rem !important
        }

        .pt-sm-1, .py-sm-1 {
            padding-top: .25rem !important
        }

        .pr-sm-1, .px-sm-1 {
            padding-right: .25rem !important
        }

        .pb-sm-1, .py-sm-1 {
            padding-bottom: .25rem !important
        }

        .pl-sm-1, .px-sm-1 {
            padding-left: .25rem !important
        }

        .p-sm-2 {
            padding: .5rem !important
        }

        .pt-sm-2, .py-sm-2 {
            padding-top: .5rem !important
        }

        .pr-sm-2, .px-sm-2 {
            padding-right: .5rem !important
        }

        .pb-sm-2, .py-sm-2 {
            padding-bottom: .5rem !important
        }

        .pl-sm-2, .px-sm-2 {
            padding-left: .5rem !important
        }

        .p-sm-3 {
            padding: 1rem !important
        }

        .pt-sm-3, .py-sm-3 {
            padding-top: 1rem !important
        }

        .pr-sm-3, .px-sm-3 {
            padding-right: 1rem !important
        }

        .pb-sm-3, .py-sm-3 {
            padding-bottom: 1rem !important
        }

        .pl-sm-3, .px-sm-3 {
            padding-left: 1rem !important
        }

        .p-sm-4 {
            padding: 1.5rem !important
        }

        .pt-sm-4, .py-sm-4 {
            padding-top: 1.5rem !important
        }

        .pr-sm-4, .px-sm-4 {
            padding-right: 1.5rem !important
        }

        .pb-sm-4, .py-sm-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-sm-4, .px-sm-4 {
            padding-left: 1.5rem !important
        }

        .p-sm-5 {
            padding: 3rem !important
        }

        .pt-sm-5, .py-sm-5 {
            padding-top: 3rem !important
        }

        .pr-sm-5, .px-sm-5 {
            padding-right: 3rem !important
        }

        .pb-sm-5, .py-sm-5 {
            padding-bottom: 3rem !important
        }

        .pl-sm-5, .px-sm-5 {
            padding-left: 3rem !important
        }

        .m-sm-auto {
            margin: auto !important
        }

        .mt-sm-auto, .my-sm-auto {
            margin-top: auto !important
        }

        .mr-sm-auto, .mx-sm-auto {
            margin-right: auto !important
        }

        .mb-sm-auto, .my-sm-auto {
            margin-bottom: auto !important
        }

        .ml-sm-auto, .mx-sm-auto {
            margin-left: auto !important
        }
    }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important
        }

        .mt-md-0, .my-md-0 {
            margin-top: 0 !important
        }

        .mr-md-0, .mx-md-0 {
            margin-right: 0 !important
        }

        .mb-md-0, .my-md-0 {
            margin-bottom: 0 !important
        }

        .ml-md-0, .mx-md-0 {
            margin-left: 0 !important
        }

        .m-md-1 {
            margin: .25rem !important
        }

        .mt-md-1, .my-md-1 {
            margin-top: .25rem !important
        }

        .mr-md-1, .mx-md-1 {
            margin-right: .25rem !important
        }

        .mb-md-1, .my-md-1 {
            margin-bottom: .25rem !important
        }

        .ml-md-1, .mx-md-1 {
            margin-left: .25rem !important
        }

        .m-md-2 {
            margin: .5rem !important
        }

        .mt-md-2, .my-md-2 {
            margin-top: .5rem !important
        }

        .mr-md-2, .mx-md-2 {
            margin-right: .5rem !important
        }

        .mb-md-2, .my-md-2 {
            margin-bottom: .5rem !important
        }

        .ml-md-2, .mx-md-2 {
            margin-left: .5rem !important
        }

        .m-md-3 {
            margin: 1rem !important
        }

        .mt-md-3, .my-md-3 {
            margin-top: 1rem !important
        }

        .mr-md-3, .mx-md-3 {
            margin-right: 1rem !important
        }

        .mb-md-3, .my-md-3 {
            margin-bottom: 1rem !important
        }

        .ml-md-3, .mx-md-3 {
            margin-left: 1rem !important
        }

        .m-md-4 {
            margin: 1.5rem !important
        }

        .mt-md-4, .my-md-4 {
            margin-top: 1.5rem !important
        }

        .mr-md-4, .mx-md-4 {
            margin-right: 1.5rem !important
        }

        .mb-md-4, .my-md-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-md-4, .mx-md-4 {
            margin-left: 1.5rem !important
        }

        .m-md-5 {
            margin: 3rem !important
        }

        .mt-md-5, .my-md-5 {
            margin-top: 3rem !important
        }

        .mr-md-5, .mx-md-5 {
            margin-right: 3rem !important
        }

        .mb-md-5, .my-md-5 {
            margin-bottom: 3rem !important
        }

        .ml-md-5, .mx-md-5 {
            margin-left: 3rem !important
        }

        .p-md-0 {
            padding: 0 !important
        }

        .pt-md-0, .py-md-0 {
            padding-top: 0 !important
        }

        .pr-md-0, .px-md-0 {
            padding-right: 0 !important
        }

        .pb-md-0, .py-md-0 {
            padding-bottom: 0 !important
        }

        .pl-md-0, .px-md-0 {
            padding-left: 0 !important
        }

        .p-md-1 {
            padding: .25rem !important
        }

        .pt-md-1, .py-md-1 {
            padding-top: .25rem !important
        }

        .pr-md-1, .px-md-1 {
            padding-right: .25rem !important
        }

        .pb-md-1, .py-md-1 {
            padding-bottom: .25rem !important
        }

        .pl-md-1, .px-md-1 {
            padding-left: .25rem !important
        }

        .p-md-2 {
            padding: .5rem !important
        }

        .pt-md-2, .py-md-2 {
            padding-top: .5rem !important
        }

        .pr-md-2, .px-md-2 {
            padding-right: .5rem !important
        }

        .pb-md-2, .py-md-2 {
            padding-bottom: .5rem !important
        }

        .pl-md-2, .px-md-2 {
            padding-left: .5rem !important
        }

        .p-md-3 {
            padding: 1rem !important
        }

        .pt-md-3, .py-md-3 {
            padding-top: 1rem !important
        }

        .pr-md-3, .px-md-3 {
            padding-right: 1rem !important
        }

        .pb-md-3, .py-md-3 {
            padding-bottom: 1rem !important
        }

        .pl-md-3, .px-md-3 {
            padding-left: 1rem !important
        }

        .p-md-4 {
            padding: 1.5rem !important
        }

        .pt-md-4, .py-md-4 {
            padding-top: 1.5rem !important
        }

        .pr-md-4, .px-md-4 {
            padding-right: 1.5rem !important
        }

        .pb-md-4, .py-md-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-md-4, .px-md-4 {
            padding-left: 1.5rem !important
        }

        .p-md-5 {
            padding: 3rem !important
        }

        .pt-md-5, .py-md-5 {
            padding-top: 3rem !important
        }

        .pr-md-5, .px-md-5 {
            padding-right: 3rem !important
        }

        .pb-md-5, .py-md-5 {
            padding-bottom: 3rem !important
        }

        .pl-md-5, .px-md-5 {
            padding-left: 3rem !important
        }

        .m-md-auto {
            margin: auto !important
        }

        .mt-md-auto, .my-md-auto {
            margin-top: auto !important
        }

        .mr-md-auto, .mx-md-auto {
            margin-right: auto !important
        }

        .mb-md-auto, .my-md-auto {
            margin-bottom: auto !important
        }

        .ml-md-auto, .mx-md-auto {
            margin-left: auto !important
        }
    }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important
        }

        .mt-lg-0, .my-lg-0 {
            margin-top: 0 !important
        }

        .mr-lg-0, .mx-lg-0 {
            margin-right: 0 !important
        }

        .mb-lg-0, .my-lg-0 {
            margin-bottom: 0 !important
        }

        .ml-lg-0, .mx-lg-0 {
            margin-left: 0 !important
        }

        .m-lg-1 {
            margin: .25rem !important
        }

        .mt-lg-1, .my-lg-1 {
            margin-top: .25rem !important
        }

        .mr-lg-1, .mx-lg-1 {
            margin-right: .25rem !important
        }

        .mb-lg-1, .my-lg-1 {
            margin-bottom: .25rem !important
        }

        .ml-lg-1, .mx-lg-1 {
            margin-left: .25rem !important
        }

        .m-lg-2 {
            margin: .5rem !important
        }

        .mt-lg-2, .my-lg-2 {
            margin-top: .5rem !important
        }

        .mr-lg-2, .mx-lg-2 {
            margin-right: .5rem !important
        }

        .mb-lg-2, .my-lg-2 {
            margin-bottom: .5rem !important
        }

        .ml-lg-2, .mx-lg-2 {
            margin-left: .5rem !important
        }

        .m-lg-3 {
            margin: 1rem !important
        }

        .mt-lg-3, .my-lg-3 {
            margin-top: 1rem !important
        }

        .mr-lg-3, .mx-lg-3 {
            margin-right: 1rem !important
        }

        .mb-lg-3, .my-lg-3 {
            margin-bottom: 1rem !important
        }

        .ml-lg-3, .mx-lg-3 {
            margin-left: 1rem !important
        }

        .m-lg-4 {
            margin: 1.5rem !important
        }

        .mt-lg-4, .my-lg-4 {
            margin-top: 1.5rem !important
        }

        .mr-lg-4, .mx-lg-4 {
            margin-right: 1.5rem !important
        }

        .mb-lg-4, .my-lg-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-lg-4, .mx-lg-4 {
            margin-left: 1.5rem !important
        }

        .m-lg-5 {
            margin: 3rem !important
        }

        .mt-lg-5, .my-lg-5 {
            margin-top: 3rem !important
        }

        .mr-lg-5, .mx-lg-5 {
            margin-right: 3rem !important
        }

        .mb-lg-5, .my-lg-5 {
            margin-bottom: 3rem !important
        }

        .ml-lg-5, .mx-lg-5 {
            margin-left: 3rem !important
        }

        .p-lg-0 {
            padding: 0 !important
        }

        .pt-lg-0, .py-lg-0 {
            padding-top: 0 !important
        }

        .pr-lg-0, .px-lg-0 {
            padding-right: 0 !important
        }

        .pb-lg-0, .py-lg-0 {
            padding-bottom: 0 !important
        }

        .pl-lg-0, .px-lg-0 {
            padding-left: 0 !important
        }

        .p-lg-1 {
            padding: .25rem !important
        }

        .pt-lg-1, .py-lg-1 {
            padding-top: .25rem !important
        }

        .pr-lg-1, .px-lg-1 {
            padding-right: .25rem !important
        }

        .pb-lg-1, .py-lg-1 {
            padding-bottom: .25rem !important
        }

        .pl-lg-1, .px-lg-1 {
            padding-left: .25rem !important
        }

        .p-lg-2 {
            padding: .5rem !important
        }

        .pt-lg-2, .py-lg-2 {
            padding-top: .5rem !important
        }

        .pr-lg-2, .px-lg-2 {
            padding-right: .5rem !important
        }

        .pb-lg-2, .py-lg-2 {
            padding-bottom: .5rem !important
        }

        .pl-lg-2, .px-lg-2 {
            padding-left: .5rem !important
        }

        .p-lg-3 {
            padding: 1rem !important
        }

        .pt-lg-3, .py-lg-3 {
            padding-top: 1rem !important
        }

        .pr-lg-3, .px-lg-3 {
            padding-right: 1rem !important
        }

        .pb-lg-3, .py-lg-3 {
            padding-bottom: 1rem !important
        }

        .pl-lg-3, .px-lg-3 {
            padding-left: 1rem !important
        }

        .p-lg-4 {
            padding: 1.5rem !important
        }

        .pt-lg-4, .py-lg-4 {
            padding-top: 1.5rem !important
        }

        .pr-lg-4, .px-lg-4 {
            padding-right: 1.5rem !important
        }

        .pb-lg-4, .py-lg-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-lg-4, .px-lg-4 {
            padding-left: 1.5rem !important
        }

        .p-lg-5 {
            padding: 3rem !important
        }

        .pt-lg-5, .py-lg-5 {
            padding-top: 3rem !important
        }

        .pr-lg-5, .px-lg-5 {
            padding-right: 3rem !important
        }

        .pb-lg-5, .py-lg-5 {
            padding-bottom: 3rem !important
        }

        .pl-lg-5, .px-lg-5 {
            padding-left: 3rem !important
        }

        .m-lg-auto {
            margin: auto !important
        }

        .mt-lg-auto, .my-lg-auto {
            margin-top: auto !important
        }

        .mr-lg-auto, .mx-lg-auto {
            margin-right: auto !important
        }

        .mb-lg-auto, .my-lg-auto {
            margin-bottom: auto !important
        }

        .ml-lg-auto, .mx-lg-auto {
            margin-left: auto !important
        }
    }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important
        }

        .mt-xl-0, .my-xl-0 {
            margin-top: 0 !important
        }

        .mr-xl-0, .mx-xl-0 {
            margin-right: 0 !important
        }

        .mb-xl-0, .my-xl-0 {
            margin-bottom: 0 !important
        }

        .ml-xl-0, .mx-xl-0 {
            margin-left: 0 !important
        }

        .m-xl-1 {
            margin: .25rem !important
        }

        .mt-xl-1, .my-xl-1 {
            margin-top: .25rem !important
        }

        .mr-xl-1, .mx-xl-1 {
            margin-right: .25rem !important
        }

        .mb-xl-1, .my-xl-1 {
            margin-bottom: .25rem !important
        }

        .ml-xl-1, .mx-xl-1 {
            margin-left: .25rem !important
        }

        .m-xl-2 {
            margin: .5rem !important
        }

        .mt-xl-2, .my-xl-2 {
            margin-top: .5rem !important
        }

        .mr-xl-2, .mx-xl-2 {
            margin-right: .5rem !important
        }

        .mb-xl-2, .my-xl-2 {
            margin-bottom: .5rem !important
        }

        .ml-xl-2, .mx-xl-2 {
            margin-left: .5rem !important
        }

        .m-xl-3 {
            margin: 1rem !important
        }

        .mt-xl-3, .my-xl-3 {
            margin-top: 1rem !important
        }

        .mr-xl-3, .mx-xl-3 {
            margin-right: 1rem !important
        }

        .mb-xl-3, .my-xl-3 {
            margin-bottom: 1rem !important
        }

        .ml-xl-3, .mx-xl-3 {
            margin-left: 1rem !important
        }

        .m-xl-4 {
            margin: 1.5rem !important
        }

        .mt-xl-4, .my-xl-4 {
            margin-top: 1.5rem !important
        }

        .mr-xl-4, .mx-xl-4 {
            margin-right: 1.5rem !important
        }

        .mb-xl-4, .my-xl-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-xl-4, .mx-xl-4 {
            margin-left: 1.5rem !important
        }

        .m-xl-5 {
            margin: 3rem !important
        }

        .mt-xl-5, .my-xl-5 {
            margin-top: 3rem !important
        }

        .mr-xl-5, .mx-xl-5 {
            margin-right: 3rem !important
        }

        .mb-xl-5, .my-xl-5 {
            margin-bottom: 3rem !important
        }

        .ml-xl-5, .mx-xl-5 {
            margin-left: 3rem !important
        }

        .p-xl-0 {
            padding: 0 !important
        }

        .pt-xl-0, .py-xl-0 {
            padding-top: 0 !important
        }

        .pr-xl-0, .px-xl-0 {
            padding-right: 0 !important
        }

        .pb-xl-0, .py-xl-0 {
            padding-bottom: 0 !important
        }

        .pl-xl-0, .px-xl-0 {
            padding-left: 0 !important
        }

        .p-xl-1 {
            padding: .25rem !important
        }

        .pt-xl-1, .py-xl-1 {
            padding-top: .25rem !important
        }

        .pr-xl-1, .px-xl-1 {
            padding-right: .25rem !important
        }

        .pb-xl-1, .py-xl-1 {
            padding-bottom: .25rem !important
        }

        .pl-xl-1, .px-xl-1 {
            padding-left: .25rem !important
        }

        .p-xl-2 {
            padding: .5rem !important
        }

        .pt-xl-2, .py-xl-2 {
            padding-top: .5rem !important
        }

        .pr-xl-2, .px-xl-2 {
            padding-right: .5rem !important
        }

        .pb-xl-2, .py-xl-2 {
            padding-bottom: .5rem !important
        }

        .pl-xl-2, .px-xl-2 {
            padding-left: .5rem !important
        }

        .p-xl-3 {
            padding: 1rem !important
        }

        .pt-xl-3, .py-xl-3 {
            padding-top: 1rem !important
        }

        .pr-xl-3, .px-xl-3 {
            padding-right: 1rem !important
        }

        .pb-xl-3, .py-xl-3 {
            padding-bottom: 1rem !important
        }

        .pl-xl-3, .px-xl-3 {
            padding-left: 1rem !important
        }

        .p-xl-4 {
            padding: 1.5rem !important
        }

        .pt-xl-4, .py-xl-4 {
            padding-top: 1.5rem !important
        }

        .pr-xl-4, .px-xl-4 {
            padding-right: 1.5rem !important
        }

        .pb-xl-4, .py-xl-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-xl-4, .px-xl-4 {
            padding-left: 1.5rem !important
        }

        .p-xl-5 {
            padding: 3rem !important
        }

        .pt-xl-5, .py-xl-5 {
            padding-top: 3rem !important
        }

        .pr-xl-5, .px-xl-5 {
            padding-right: 3rem !important
        }

        .pb-xl-5, .py-xl-5 {
            padding-bottom: 3rem !important
        }

        .pl-xl-5, .px-xl-5 {
            padding-left: 3rem !important
        }

        .m-xl-auto {
            margin: auto !important
        }

        .mt-xl-auto, .my-xl-auto {
            margin-top: auto !important
        }

        .mr-xl-auto, .mx-xl-auto {
            margin-right: auto !important
        }

        .mb-xl-auto, .my-xl-auto {
            margin-bottom: auto !important
        }

        .ml-xl-auto, .mx-xl-auto {
            margin-left: auto !important
        }
    }

    .text-justify {
        text-align: justify !important
    }

    .text-nowrap {
        white-space: nowrap !important
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .text-left {
        text-align: left !important
    }

    .text-right {
        text-align: right !important
    }

    .text-center {
        text-align: center !important
    }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important
        }

        .text-sm-right {
            text-align: right !important
        }

        .text-sm-center {
            text-align: center !important
        }
    }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important
        }

        .text-md-right {
            text-align: right !important
        }

        .text-md-center {
            text-align: center !important
        }
    }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important
        }

        .text-lg-right {
            text-align: right !important
        }

        .text-lg-center {
            text-align: center !important
        }
    }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important
        }

        .text-xl-right {
            text-align: right !important
        }

        .text-xl-center {
            text-align: center !important
        }
    }

    .text-lowercase {
        text-transform: lowercase !important
    }

    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-capitalize {
        text-transform: capitalize !important
    }

    .font-weight-light {
        font-weight: 300 !important
    }

    .font-weight-normal {
        font-weight: 400 !important
    }

    .font-weight-bold {
        font-weight: 700 !important
    }

    .font-italic {
        font-style: italic !important
    }

    .text-white {
        color: #fff !important
    }

    .text-primary {
        color: #007bff !important
    }

    a.text-primary:focus, a.text-primary:hover {
        color: #0062cc !important
    }

    .text-secondary {
        color: #6c757d !important
    }

    a.text-secondary:focus, a.text-secondary:hover {
        color: #545b62 !important
    }

    .text-success {
        color: #28a745 !important
    }

    a.text-success:focus, a.text-success:hover {
        color: #1e7e34 !important
    }

    .text-info {
        color: #17a2b8 !important
    }

    a.text-info:focus, a.text-info:hover {
        color: #117a8b !important
    }

    .text-warning {
        color: #ffc107 !important
    }

    a.text-warning:focus, a.text-warning:hover {
        color: #d39e00 !important
    }

    .text-danger {
        color: #dc3545 !important
    }

    a.text-danger:focus, a.text-danger:hover {
        color: #bd2130 !important
    }

    .text-light {
        color: #f8f9fa !important
    }

    a.text-light:focus, a.text-light:hover {
        color: #dae0e5 !important
    }

    .text-dark {
        color: #343a40 !important
    }

    a.text-dark:focus, a.text-dark:hover {
        color: #1d2124 !important
    }

    .text-muted {
        color: #6c757d !important
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0
    }

    .visible {
        visibility: visible !important
    }

    .invisible {
        visibility: hidden !important
    }

    @media print {
        *, ::after, ::before {
            text-shadow: none !important;
            box-shadow: none !important
        }

        a:not(.btn) {
            text-decoration: underline
        }

        abbr[title]::after {
            content: " (" attr(title) ")"
        }

        pre {
            white-space: pre-wrap !important
        }

        blockquote, pre {
            border: 1px solid #999;
            page-break-inside: avoid
        }

        thead {
            display: table-header-group
        }

        img, tr {
            page-break-inside: avoid
        }

        h2, h3, p {
            orphans: 3;
            widows: 3
        }

        h2, h3 {
            page-break-after: avoid
        }

        @page {
            size: a3
        }

        body {
            min-width: 992px !important
        }

        .container {
            min-width: 992px !important
        }

        .navbar {
            display: none
        }

        .badge {
            border: 1px solid #000
        }

        .table {
            border-collapse: collapse !important
        }

        .table td, .table th {
            background-color: #fff !important
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #ddd !important
        }
    }

    /*# sourceMappingURL=bootstrap.min.css.map */
</style>
<style type="text/css">
    .card {
        margin-bottom: 1.5rem
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #c8ced3;
        border-radius: .25rem
    }

    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: #f0f3f5;
        border-bottom: 1px solid #c8ced3
    }
</style>
{{--</head>--}}
{{--<body>--}}
<div class="container-fluid">
    <div id="ui-view" data-select2-id="ui-view">
        <div>
            <div class="card">
                <div class="card-header">Invoice
                    <strong>#{{ $row->id }}</strong>
                    <a class="btn btn-sm btn-secondary float-right mr-1 d-print-none" href="#"
                       onclick="javascript:window.print();" data-abc="true">
                        <i class="fa fa-print"></i> Print</a>
                    <a class="btn btn-sm btn-info float-right mr-1 d-print-none" href="#" data-abc="true">
                        <i class="fa fa-save"></i> Save</a>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-sm-4">
                            <h6 class="mb-3">From:</h6>
                            <div>
                                <strong>Asia Enterprises</strong>
                            </div>
                            <div>Block 10, Gulistan-e-Johar, Karachi.</div>
                            <div>Email: support@asiaenterprises.org</div>
                            <div>Phone: 03009262041</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3">To:</h6>
                            <div>
                                <strong>{{ $row->customer->name }}</strong>
                            </div>
                            <div>{{ $row->customer->address }}</div>
                            <div>Email: {{ $row->customer->email }}</div>
                            <div>Phone: {{ $row->customer->contact }}</div>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="mb-3">Details:</h6>
                            <div>Invoice
                                <strong>#{{ $row->id }}</strong>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Created Date</th>
                                <th>Package</th>
                                <th class="right">Package Amount</th>
                                <th class="right">Paid</th>
                                <th class="right">DIFFERENCE</th>
                            </tr>
                            </thead>
                            @php
                                $total = 0;
                                $pack = 0;
                                $diff = 0;
                                $packages = explode( '^*' , $row->package_id);
                                $amount = explode( '^*' , $row->amount);
                                foreach ($amount as $key => $am){
                                    $id = $packages[$key];
                                    $package = \App\Package::findOrFail($id);
                                    $pack += $package->amount;
                                    $total += (int)$am;
                                }

                                $diff = $pack - $total;
                            @endphp
                            <tbody>
                            @foreach($packages as $key => $val2)
                                @php
                                    $package = \App\Package::findOrFail($val2);
                                    $dif  = $package->amount - $amount[$key];
                                @endphp
                                <tr>
                                    <td class="center">{{ $key+1 }}</td>
                                    <td class="left">{{ $row->created_at }}</td>
                                    <td class="left">{{ $package->title }}</td>
                                    <td class="center">{{ $package->amount }}</td>
                                    <td class="right">{{ $amount[$key] }}</td>
                                    <td class="right">{{ $dif }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-5">
                        </div>
                        <div class="col-lg-4 col-sm-5 ml-auto">
                            <table class="table table-clear">
                                <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Paid Total</strong>
                                    </td>
                                    <td class="right">{{ $pack }}</td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>{{ $total }}</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h3>Invoice Log</h3>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Title</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($row->log as $log)
                                <tr>
                                    <td>{{ $log->date }}</td>
                                    <td>{{ $log->title }}</td>
                                    <td>{{ $log->amount }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /*! jQuery v3.2.1 | (c) JS Foundation and other contributors | jquery.org/license */
    !function (a, b) {
        "use strict";
        "object" == typeof module && "object" == typeof module.exports ? module.exports = a.document ? b(a, !0) : function (a) {
            if (!a.document) throw new Error("jQuery requires a window with a document");
            return b(a)
        } : b(a)
    }("undefined" != typeof window ? window : this, function (a, b) {
        "use strict";
        var c = [], d = a.document, e = Object.getPrototypeOf, f = c.slice, g = c.concat, h = c.push, i = c.indexOf,
            j = {}, k = j.toString, l = j.hasOwnProperty, m = l.toString, n = m.call(Object), o = {};

        function p(a, b) {
            b = b || d;
            var c = b.createElement("script");
            c.text = a, b.head.appendChild(c).parentNode.removeChild(c)
        }

        var q = "3.2.1", r = function (a, b) {
            return new r.fn.init(a, b)
        }, s = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, t = /^-ms-/, u = /-([a-z])/g, v = function (a, b) {
            return b.toUpperCase()
        };
        r.fn = r.prototype = {
            jquery: q, constructor: r, length: 0, toArray: function () {
                return f.call(this)
            }, get: function (a) {
                return null == a ? f.call(this) : a < 0 ? this[a + this.length] : this[a]
            }, pushStack: function (a) {
                var b = r.merge(this.constructor(), a);
                return b.prevObject = this, b
            }, each: function (a) {
                return r.each(this, a)
            }, map: function (a) {
                return this.pushStack(r.map(this, function (b, c) {
                    return a.call(b, c, b)
                }))
            }, slice: function () {
                return this.pushStack(f.apply(this, arguments))
            }, first: function () {
                return this.eq(0)
            }, last: function () {
                return this.eq(-1)
            }, eq: function (a) {
                var b = this.length, c = +a + (a < 0 ? b : 0);
                return this.pushStack(c >= 0 && c < b ? [this[c]] : [])
            }, end: function () {
                return this.prevObject || this.constructor()
            }, push: h, sort: c.sort, splice: c.splice
        }, r.extend = r.fn.extend = function () {
            var a, b, c, d, e, f, g = arguments[0] || {}, h = 1, i = arguments.length, j = !1;
            for ("boolean" == typeof g && (j = g, g = arguments[h] || {}, h++), "object" == typeof g || r.isFunction(g) || (g = {}), h === i && (g = this, h--); h < i; h++) if (null != (a = arguments[h])) for (b in a) c = g[b], d = a[b], g !== d && (j && d && (r.isPlainObject(d) || (e = Array.isArray(d))) ? (e ? (e = !1, f = c && Array.isArray(c) ? c : []) : f = c && r.isPlainObject(c) ? c : {}, g[b] = r.extend(j, f, d)) : void 0 !== d && (g[b] = d));
            return g
        }, r.extend({
            expando: "jQuery" + (q + Math.random()).replace(/\D/g, ""), isReady: !0, error: function (a) {
                throw new Error(a)
            }, noop: function () {
            }, isFunction: function (a) {
                return "function" === r.type(a)
            }, isWindow: function (a) {
                return null != a && a === a.window
            }, isNumeric: function (a) {
                var b = r.type(a);
                return ("number" === b || "string" === b) && !isNaN(a - parseFloat(a))
            }, isPlainObject: function (a) {
                var b, c;
                return !(!a || "[object Object]" !== k.call(a)) && (!(b = e(a)) || (c = l.call(b, "constructor") && b.constructor, "function" == typeof c && m.call(c) === n))
            }, isEmptyObject: function (a) {
                var b;
                for (b in a) return !1;
                return !0
            }, type: function (a) {
                return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? j[k.call(a)] || "object" : typeof a
            }, globalEval: function (a) {
                p(a)
            }, camelCase: function (a) {
                return a.replace(t, "ms-").replace(u, v)
            }, each: function (a, b) {
                var c, d = 0;
                if (w(a)) {
                    for (c = a.length; d < c; d++) if (b.call(a[d], d, a[d]) === !1) break
                } else for (d in a) if (b.call(a[d], d, a[d]) === !1) break;
                return a
            }, trim: function (a) {
                return null == a ? "" : (a + "").replace(s, "")
            }, makeArray: function (a, b) {
                var c = b || [];
                return null != a && (w(Object(a)) ? r.merge(c, "string" == typeof a ? [a] : a) : h.call(c, a)), c
            }, inArray: function (a, b, c) {
                return null == b ? -1 : i.call(b, a, c)
            }, merge: function (a, b) {
                for (var c = +b.length, d = 0, e = a.length; d < c; d++) a[e++] = b[d];
                return a.length = e, a
            }, grep: function (a, b, c) {
                for (var d, e = [], f = 0, g = a.length, h = !c; f < g; f++) d = !b(a[f], f), d !== h && e.push(a[f]);
                return e
            }, map: function (a, b, c) {
                var d, e, f = 0, h = [];
                if (w(a)) for (d = a.length; f < d; f++) e = b(a[f], f, c), null != e && h.push(e); else for (f in a) e = b(a[f], f, c), null != e && h.push(e);
                return g.apply([], h)
            }, guid: 1, proxy: function (a, b) {
                var c, d, e;
                if ("string" == typeof b && (c = a[b], b = a, a = c), r.isFunction(a)) return d = f.call(arguments, 2), e = function () {
                    return a.apply(b || this, d.concat(f.call(arguments)))
                }, e.guid = a.guid = a.guid || r.guid++, e
            }, now: Date.now, support: o
        }), "function" == typeof Symbol && (r.fn[Symbol.iterator] = c[Symbol.iterator]), r.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (a, b) {
            j["[object " + b + "]"] = b.toLowerCase()
        });

        function w(a) {
            var b = !!a && "length" in a && a.length, c = r.type(a);
            return "function" !== c && !r.isWindow(a) && ("array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a)
        }

        var x = function (a) {
            var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u = "sizzle" + 1 * new Date, v = a.document,
                w = 0, x = 0, y = ha(), z = ha(), A = ha(), B = function (a, b) {
                    return a === b && (l = !0), 0
                }, C = {}.hasOwnProperty, D = [], E = D.pop, F = D.push, G = D.push, H = D.slice, I = function (a, b) {
                    for (var c = 0, d = a.length; c < d; c++) if (a[c] === b) return c;
                    return -1
                },
                J = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
                K = "[\\x20\\t\\r\\n\\f]", L = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
                M = "\\[" + K + "*(" + L + ")(?:" + K + "*([*^$|!~]?=)" + K + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + L + "))|)" + K + "*\\]",
                N = ":(" + L + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + M + ")*)|.*)\\)|)",
                O = new RegExp(K + "+", "g"), P = new RegExp("^" + K + "+|((?:^|[^\\\\])(?:\\\\.)*)" + K + "+$", "g"),
                Q = new RegExp("^" + K + "*," + K + "*"), R = new RegExp("^" + K + "*([>+~]|" + K + ")" + K + "*"),
                S = new RegExp("=" + K + "*([^\\]'\"]*?)" + K + "*\\]", "g"), T = new RegExp(N),
                U = new RegExp("^" + L + "$"), V = {
                    ID: new RegExp("^#(" + L + ")"),
                    CLASS: new RegExp("^\\.(" + L + ")"),
                    TAG: new RegExp("^(" + L + "|[*])"),
                    ATTR: new RegExp("^" + M),
                    PSEUDO: new RegExp("^" + N),
                    CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + K + "*(even|odd|(([+-]|)(\\d*)n|)" + K + "*(?:([+-]|)" + K + "*(\\d+)|))" + K + "*\\)|)", "i"),
                    bool: new RegExp("^(?:" + J + ")$", "i"),
                    needsContext: new RegExp("^" + K + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + K + "*((?:-\\d)?\\d*)" + K + "*\\)|)(?=[^-]|$)", "i")
                }, W = /^(?:input|select|textarea|button)$/i, X = /^h\d$/i, Y = /^[^{]+\{\s*\[native \w/,
                Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/, $ = /[+~]/,
                _ = new RegExp("\\\\([\\da-f]{1,6}" + K + "?|(" + K + ")|.)", "ig"), aa = function (a, b, c) {
                    var d = "0x" + b - 65536;
                    return d !== d || c ? b : d < 0 ? String.fromCharCode(d + 65536) : String.fromCharCode(d >> 10 | 55296, 1023 & d | 56320)
                }, ba = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g, ca = function (a, b) {
                    return b ? "\0" === a ? "\ufffd" : a.slice(0, -1) + "\\" + a.charCodeAt(a.length - 1).toString(16) + " " : "\\" + a
                }, da = function () {
                    m()
                }, ea = ta(function (a) {
                    return a.disabled === !0 && ("form" in a || "label" in a)
                }, {dir: "parentNode", next: "legend"});
            try {
                G.apply(D = H.call(v.childNodes), v.childNodes), D[v.childNodes.length].nodeType
            } catch (fa) {
                G = {
                    apply: D.length ? function (a, b) {
                        F.apply(a, H.call(b))
                    } : function (a, b) {
                        var c = a.length, d = 0;
                        while (a[c++] = b[d++]) ;
                        a.length = c - 1
                    }
                }
            }

            function ga(a, b, d, e) {
                var f, h, j, k, l, o, r, s = b && b.ownerDocument, w = b ? b.nodeType : 9;
                if (d = d || [], "string" != typeof a || !a || 1 !== w && 9 !== w && 11 !== w) return d;
                if (!e && ((b ? b.ownerDocument || b : v) !== n && m(b), b = b || n, p)) {
                    if (11 !== w && (l = Z.exec(a))) if (f = l[1]) {
                        if (9 === w) {
                            if (!(j = b.getElementById(f))) return d;
                            if (j.id === f) return d.push(j), d
                        } else if (s && (j = s.getElementById(f)) && t(b, j) && j.id === f) return d.push(j), d
                    } else {
                        if (l[2]) return G.apply(d, b.getElementsByTagName(a)), d;
                        if ((f = l[3]) && c.getElementsByClassName && b.getElementsByClassName) return G.apply(d, b.getElementsByClassName(f)), d
                    }
                    if (c.qsa && !A[a + " "] && (!q || !q.test(a))) {
                        if (1 !== w) s = b, r = a; else if ("object" !== b.nodeName.toLowerCase()) {
                            (k = b.getAttribute("id")) ? k = k.replace(ba, ca) : b.setAttribute("id", k = u), o = g(a), h = o.length;
                            while (h--) o[h] = "#" + k + " " + sa(o[h]);
                            r = o.join(","), s = $.test(a) && qa(b.parentNode) || b
                        }
                        if (r) try {
                            return G.apply(d, s.querySelectorAll(r)), d
                        } catch (x) {
                        } finally {
                            k === u && b.removeAttribute("id")
                        }
                    }
                }
                return i(a.replace(P, "$1"), b, d, e)
            }

            function ha() {
                var a = [];

                function b(c, e) {
                    return a.push(c + " ") > d.cacheLength && delete b[a.shift()], b[c + " "] = e
                }

                return b
            }

            function ia(a) {
                return a[u] = !0, a
            }

            function ja(a) {
                var b = n.createElement("fieldset");
                try {
                    return !!a(b)
                } catch (c) {
                    return !1
                } finally {
                    b.parentNode && b.parentNode.removeChild(b), b = null
                }
            }

            function ka(a, b) {
                var c = a.split("|"), e = c.length;
                while (e--) d.attrHandle[c[e]] = b
            }

            function la(a, b) {
                var c = b && a, d = c && 1 === a.nodeType && 1 === b.nodeType && a.sourceIndex - b.sourceIndex;
                if (d) return d;
                if (c) while (c = c.nextSibling) if (c === b) return -1;
                return a ? 1 : -1
            }

            function ma(a) {
                return function (b) {
                    var c = b.nodeName.toLowerCase();
                    return "input" === c && b.type === a
                }
            }

            function na(a) {
                return function (b) {
                    var c = b.nodeName.toLowerCase();
                    return ("input" === c || "button" === c) && b.type === a
                }
            }

            function oa(a) {
                return function (b) {
                    return "form" in b ? b.parentNode && b.disabled === !1 ? "label" in b ? "label" in b.parentNode ? b.parentNode.disabled === a : b.disabled === a : b.isDisabled === a || b.isDisabled !== !a && ea(b) === a : b.disabled === a : "label" in b && b.disabled === a
                }
            }

            function pa(a) {
                return ia(function (b) {
                    return b = +b, ia(function (c, d) {
                        var e, f = a([], c.length, b), g = f.length;
                        while (g--) c[e = f[g]] && (c[e] = !(d[e] = c[e]))
                    })
                })
            }

            function qa(a) {
                return a && "undefined" != typeof a.getElementsByTagName && a
            }

            c = ga.support = {}, f = ga.isXML = function (a) {
                var b = a && (a.ownerDocument || a).documentElement;
                return !!b && "HTML" !== b.nodeName
            }, m = ga.setDocument = function (a) {
                var b, e, g = a ? a.ownerDocument || a : v;
                return g !== n && 9 === g.nodeType && g.documentElement ? (n = g, o = n.documentElement, p = !f(n), v !== n && (e = n.defaultView) && e.top !== e && (e.addEventListener ? e.addEventListener("unload", da, !1) : e.attachEvent && e.attachEvent("onunload", da)), c.attributes = ja(function (a) {
                    return a.className = "i", !a.getAttribute("className")
                }), c.getElementsByTagName = ja(function (a) {
                    return a.appendChild(n.createComment("")), !a.getElementsByTagName("*").length
                }), c.getElementsByClassName = Y.test(n.getElementsByClassName), c.getById = ja(function (a) {
                    return o.appendChild(a).id = u, !n.getElementsByName || !n.getElementsByName(u).length
                }), c.getById ? (d.filter.ID = function (a) {
                    var b = a.replace(_, aa);
                    return function (a) {
                        return a.getAttribute("id") === b
                    }
                }, d.find.ID = function (a, b) {
                    if ("undefined" != typeof b.getElementById && p) {
                        var c = b.getElementById(a);
                        return c ? [c] : []
                    }
                }) : (d.filter.ID = function (a) {
                    var b = a.replace(_, aa);
                    return function (a) {
                        var c = "undefined" != typeof a.getAttributeNode && a.getAttributeNode("id");
                        return c && c.value === b
                    }
                }, d.find.ID = function (a, b) {
                    if ("undefined" != typeof b.getElementById && p) {
                        var c, d, e, f = b.getElementById(a);
                        if (f) {
                            if (c = f.getAttributeNode("id"), c && c.value === a) return [f];
                            e = b.getElementsByName(a), d = 0;
                            while (f = e[d++]) if (c = f.getAttributeNode("id"), c && c.value === a) return [f]
                        }
                        return []
                    }
                }), d.find.TAG = c.getElementsByTagName ? function (a, b) {
                    return "undefined" != typeof b.getElementsByTagName ? b.getElementsByTagName(a) : c.qsa ? b.querySelectorAll(a) : void 0
                } : function (a, b) {
                    var c, d = [], e = 0, f = b.getElementsByTagName(a);
                    if ("*" === a) {
                        while (c = f[e++]) 1 === c.nodeType && d.push(c);
                        return d
                    }
                    return f
                }, d.find.CLASS = c.getElementsByClassName && function (a, b) {
                    if ("undefined" != typeof b.getElementsByClassName && p) return b.getElementsByClassName(a)
                }, r = [], q = [], (c.qsa = Y.test(n.querySelectorAll)) && (ja(function (a) {
                    o.appendChild(a).innerHTML = "<a id='" + u + "'></a><select id='" + u + "-\r\\' msallowcapture=''><option selected=''></option></select>", a.querySelectorAll("[msallowcapture^='']").length && q.push("[*^$]=" + K + "*(?:''|\"\")"), a.querySelectorAll("[selected]").length || q.push("\\[" + K + "*(?:value|" + J + ")"), a.querySelectorAll("[id~=" + u + "-]").length || q.push("~="), a.querySelectorAll(":checked").length || q.push(":checked"), a.querySelectorAll("a#" + u + "+*").length || q.push(".#.+[+~]")
                }), ja(function (a) {
                    a.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                    var b = n.createElement("input");
                    b.setAttribute("type", "hidden"), a.appendChild(b).setAttribute("name", "D"), a.querySelectorAll("[name=d]").length && q.push("name" + K + "*[*^$|!~]?="), 2 !== a.querySelectorAll(":enabled").length && q.push(":enabled", ":disabled"), o.appendChild(a).disabled = !0, 2 !== a.querySelectorAll(":disabled").length && q.push(":enabled", ":disabled"), a.querySelectorAll("*,:x"), q.push(",.*:")
                })), (c.matchesSelector = Y.test(s = o.matches || o.webkitMatchesSelector || o.mozMatchesSelector || o.oMatchesSelector || o.msMatchesSelector)) && ja(function (a) {
                    c.disconnectedMatch = s.call(a, "*"), s.call(a, "[s!='']:x"), r.push("!=", N)
                }), q = q.length && new RegExp(q.join("|")), r = r.length && new RegExp(r.join("|")), b = Y.test(o.compareDocumentPosition), t = b || Y.test(o.contains) ? function (a, b) {
                    var c = 9 === a.nodeType ? a.documentElement : a, d = b && b.parentNode;
                    return a === d || !(!d || 1 !== d.nodeType || !(c.contains ? c.contains(d) : a.compareDocumentPosition && 16 & a.compareDocumentPosition(d)))
                } : function (a, b) {
                    if (b) while (b = b.parentNode) if (b === a) return !0;
                    return !1
                }, B = b ? function (a, b) {
                    if (a === b) return l = !0, 0;
                    var d = !a.compareDocumentPosition - !b.compareDocumentPosition;
                    return d ? d : (d = (a.ownerDocument || a) === (b.ownerDocument || b) ? a.compareDocumentPosition(b) : 1, 1 & d || !c.sortDetached && b.compareDocumentPosition(a) === d ? a === n || a.ownerDocument === v && t(v, a) ? -1 : b === n || b.ownerDocument === v && t(v, b) ? 1 : k ? I(k, a) - I(k, b) : 0 : 4 & d ? -1 : 1)
                } : function (a, b) {
                    if (a === b) return l = !0, 0;
                    var c, d = 0, e = a.parentNode, f = b.parentNode, g = [a], h = [b];
                    if (!e || !f) return a === n ? -1 : b === n ? 1 : e ? -1 : f ? 1 : k ? I(k, a) - I(k, b) : 0;
                    if (e === f) return la(a, b);
                    c = a;
                    while (c = c.parentNode) g.unshift(c);
                    c = b;
                    while (c = c.parentNode) h.unshift(c);
                    while (g[d] === h[d]) d++;
                    return d ? la(g[d], h[d]) : g[d] === v ? -1 : h[d] === v ? 1 : 0
                }, n) : n
            }, ga.matches = function (a, b) {
                return ga(a, null, null, b)
            }, ga.matchesSelector = function (a, b) {
                if ((a.ownerDocument || a) !== n && m(a), b = b.replace(S, "='$1']"), c.matchesSelector && p && !A[b + " "] && (!r || !r.test(b)) && (!q || !q.test(b))) try {
                    var d = s.call(a, b);
                    if (d || c.disconnectedMatch || a.document && 11 !== a.document.nodeType) return d
                } catch (e) {
                }
                return ga(b, n, null, [a]).length > 0
            }, ga.contains = function (a, b) {
                return (a.ownerDocument || a) !== n && m(a), t(a, b)
            }, ga.attr = function (a, b) {
                (a.ownerDocument || a) !== n && m(a);
                var e = d.attrHandle[b.toLowerCase()],
                    f = e && C.call(d.attrHandle, b.toLowerCase()) ? e(a, b, !p) : void 0;
                return void 0 !== f ? f : c.attributes || !p ? a.getAttribute(b) : (f = a.getAttributeNode(b)) && f.specified ? f.value : null
            }, ga.escape = function (a) {
                return (a + "").replace(ba, ca)
            }, ga.error = function (a) {
                throw new Error("Syntax error, unrecognized expression: " + a)
            }, ga.uniqueSort = function (a) {
                var b, d = [], e = 0, f = 0;
                if (l = !c.detectDuplicates, k = !c.sortStable && a.slice(0), a.sort(B), l) {
                    while (b = a[f++]) b === a[f] && (e = d.push(f));
                    while (e--) a.splice(d[e], 1)
                }
                return k = null, a
            }, e = ga.getText = function (a) {
                var b, c = "", d = 0, f = a.nodeType;
                if (f) {
                    if (1 === f || 9 === f || 11 === f) {
                        if ("string" == typeof a.textContent) return a.textContent;
                        for (a = a.firstChild; a; a = a.nextSibling) c += e(a)
                    } else if (3 === f || 4 === f) return a.nodeValue
                } else while (b = a[d++]) c += e(b);
                return c
            }, d = ga.selectors = {
                cacheLength: 50,
                createPseudo: ia,
                match: V,
                attrHandle: {},
                find: {},
                relative: {
                    ">": {dir: "parentNode", first: !0},
                    " ": {dir: "parentNode"},
                    "+": {dir: "previousSibling", first: !0},
                    "~": {dir: "previousSibling"}
                },
                preFilter: {
                    ATTR: function (a) {
                        return a[1] = a[1].replace(_, aa), a[3] = (a[3] || a[4] || a[5] || "").replace(_, aa), "~=" === a[2] && (a[3] = " " + a[3] + " "), a.slice(0, 4)
                    }, CHILD: function (a) {
                        return a[1] = a[1].toLowerCase(), "nth" === a[1].slice(0, 3) ? (a[3] || ga.error(a[0]), a[4] = +(a[4] ? a[5] + (a[6] || 1) : 2 * ("even" === a[3] || "odd" === a[3])), a[5] = +(a[7] + a[8] || "odd" === a[3])) : a[3] && ga.error(a[0]), a
                    }, PSEUDO: function (a) {
                        var b, c = !a[6] && a[2];
                        return V.CHILD.test(a[0]) ? null : (a[3] ? a[2] = a[4] || a[5] || "" : c && T.test(c) && (b = g(c, !0)) && (b = c.indexOf(")", c.length - b) - c.length) && (a[0] = a[0].slice(0, b), a[2] = c.slice(0, b)), a.slice(0, 3))
                    }
                },
                filter: {
                    TAG: function (a) {
                        var b = a.replace(_, aa).toLowerCase();
                        return "*" === a ? function () {
                            return !0
                        } : function (a) {
                            return a.nodeName && a.nodeName.toLowerCase() === b
                        }
                    }, CLASS: function (a) {
                        var b = y[a + " "];
                        return b || (b = new RegExp("(^|" + K + ")" + a + "(" + K + "|$)")) && y(a, function (a) {
                            return b.test("string" == typeof a.className && a.className || "undefined" != typeof a.getAttribute && a.getAttribute("class") || "")
                        })
                    }, ATTR: function (a, b, c) {
                        return function (d) {
                            var e = ga.attr(d, a);
                            return null == e ? "!=" === b : !b || (e += "", "=" === b ? e === c : "!=" === b ? e !== c : "^=" === b ? c && 0 === e.indexOf(c) : "*=" === b ? c && e.indexOf(c) > -1 : "$=" === b ? c && e.slice(-c.length) === c : "~=" === b ? (" " + e.replace(O, " ") + " ").indexOf(c) > -1 : "|=" === b && (e === c || e.slice(0, c.length + 1) === c + "-"))
                        }
                    }, CHILD: function (a, b, c, d, e) {
                        var f = "nth" !== a.slice(0, 3), g = "last" !== a.slice(-4), h = "of-type" === b;
                        return 1 === d && 0 === e ? function (a) {
                            return !!a.parentNode
                        } : function (b, c, i) {
                            var j, k, l, m, n, o, p = f !== g ? "nextSibling" : "previousSibling", q = b.parentNode,
                                r = h && b.nodeName.toLowerCase(), s = !i && !h, t = !1;
                            if (q) {
                                if (f) {
                                    while (p) {
                                        m = b;
                                        while (m = m[p]) if (h ? m.nodeName.toLowerCase() === r : 1 === m.nodeType) return !1;
                                        o = p = "only" === a && !o && "nextSibling"
                                    }
                                    return !0
                                }
                                if (o = [g ? q.firstChild : q.lastChild], g && s) {
                                    m = q, l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), j = k[a] || [], n = j[0] === w && j[1], t = n && j[2], m = n && q.childNodes[n];
                                    while (m = ++n && m && m[p] || (t = n = 0) || o.pop()) if (1 === m.nodeType && ++t && m === b) {
                                        k[a] = [w, n, t];
                                        break
                                    }
                                } else if (s && (m = b, l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), j = k[a] || [], n = j[0] === w && j[1], t = n), t === !1) while (m = ++n && m && m[p] || (t = n = 0) || o.pop()) if ((h ? m.nodeName.toLowerCase() === r : 1 === m.nodeType) && ++t && (s && (l = m[u] || (m[u] = {}), k = l[m.uniqueID] || (l[m.uniqueID] = {}), k[a] = [w, t]), m === b)) break;
                                return t -= e, t === d || t % d === 0 && t / d >= 0
                            }
                        }
                    }, PSEUDO: function (a, b) {
                        var c,
                            e = d.pseudos[a] || d.setFilters[a.toLowerCase()] || ga.error("unsupported pseudo: " + a);
                        return e[u] ? e(b) : e.length > 1 ? (c = [a, a, "", b], d.setFilters.hasOwnProperty(a.toLowerCase()) ? ia(function (a, c) {
                            var d, f = e(a, b), g = f.length;
                            while (g--) d = I(a, f[g]), a[d] = !(c[d] = f[g])
                        }) : function (a) {
                            return e(a, 0, c)
                        }) : e
                    }
                },
                pseudos: {
                    not: ia(function (a) {
                        var b = [], c = [], d = h(a.replace(P, "$1"));
                        return d[u] ? ia(function (a, b, c, e) {
                            var f, g = d(a, null, e, []), h = a.length;
                            while (h--) (f = g[h]) && (a[h] = !(b[h] = f))
                        }) : function (a, e, f) {
                            return b[0] = a, d(b, null, f, c), b[0] = null, !c.pop()
                        }
                    }), has: ia(function (a) {
                        return function (b) {
                            return ga(a, b).length > 0
                        }
                    }), contains: ia(function (a) {
                        return a = a.replace(_, aa), function (b) {
                            return (b.textContent || b.innerText || e(b)).indexOf(a) > -1
                        }
                    }), lang: ia(function (a) {
                        return U.test(a || "") || ga.error("unsupported lang: " + a), a = a.replace(_, aa).toLowerCase(), function (b) {
                            var c;
                            do if (c = p ? b.lang : b.getAttribute("xml:lang") || b.getAttribute("lang")) return c = c.toLowerCase(), c === a || 0 === c.indexOf(a + "-"); while ((b = b.parentNode) && 1 === b.nodeType);
                            return !1
                        }
                    }), target: function (b) {
                        var c = a.location && a.location.hash;
                        return c && c.slice(1) === b.id
                    }, root: function (a) {
                        return a === o
                    }, focus: function (a) {
                        return a === n.activeElement && (!n.hasFocus || n.hasFocus()) && !!(a.type || a.href || ~a.tabIndex)
                    }, enabled: oa(!1), disabled: oa(!0), checked: function (a) {
                        var b = a.nodeName.toLowerCase();
                        return "input" === b && !!a.checked || "option" === b && !!a.selected
                    }, selected: function (a) {
                        return a.parentNode && a.parentNode.selectedIndex, a.selected === !0
                    }, empty: function (a) {
                        for (a = a.firstChild; a; a = a.nextSibling) if (a.nodeType < 6) return !1;
                        return !0
                    }, parent: function (a) {
                        return !d.pseudos.empty(a)
                    }, header: function (a) {
                        return X.test(a.nodeName)
                    }, input: function (a) {
                        return W.test(a.nodeName)
                    }, button: function (a) {
                        var b = a.nodeName.toLowerCase();
                        return "input" === b && "button" === a.type || "button" === b
                    }, text: function (a) {
                        var b;
                        return "input" === a.nodeName.toLowerCase() && "text" === a.type && (null == (b = a.getAttribute("type")) || "text" === b.toLowerCase())
                    }, first: pa(function () {
                        return [0]
                    }), last: pa(function (a, b) {
                        return [b - 1]
                    }), eq: pa(function (a, b, c) {
                        return [c < 0 ? c + b : c]
                    }), even: pa(function (a, b) {
                        for (var c = 0; c < b; c += 2) a.push(c);
                        return a
                    }), odd: pa(function (a, b) {
                        for (var c = 1; c < b; c += 2) a.push(c);
                        return a
                    }), lt: pa(function (a, b, c) {
                        for (var d = c < 0 ? c + b : c; --d >= 0;) a.push(d);
                        return a
                    }), gt: pa(function (a, b, c) {
                        for (var d = c < 0 ? c + b : c; ++d < b;) a.push(d);
                        return a
                    })
                }
            }, d.pseudos.nth = d.pseudos.eq;
            for (b in{radio: !0, checkbox: !0, file: !0, password: !0, image: !0}) d.pseudos[b] = ma(b);
            for (b in{submit: !0, reset: !0}) d.pseudos[b] = na(b);

            function ra() {
            }

            ra.prototype = d.filters = d.pseudos, d.setFilters = new ra, g = ga.tokenize = function (a, b) {
                var c, e, f, g, h, i, j, k = z[a + " "];
                if (k) return b ? 0 : k.slice(0);
                h = a, i = [], j = d.preFilter;
                while (h) {
                    c && !(e = Q.exec(h)) || (e && (h = h.slice(e[0].length) || h), i.push(f = [])), c = !1, (e = R.exec(h)) && (c = e.shift(), f.push({
                        value: c,
                        type: e[0].replace(P, " ")
                    }), h = h.slice(c.length));
                    for (g in d.filter) !(e = V[g].exec(h)) || j[g] && !(e = j[g](e)) || (c = e.shift(), f.push({
                        value: c,
                        type: g,
                        matches: e
                    }), h = h.slice(c.length));
                    if (!c) break
                }
                return b ? h.length : h ? ga.error(a) : z(a, i).slice(0)
            };

            function sa(a) {
                for (var b = 0, c = a.length, d = ""; b < c; b++) d += a[b].value;
                return d
            }

            function ta(a, b, c) {
                var d = b.dir, e = b.next, f = e || d, g = c && "parentNode" === f, h = x++;
                return b.first ? function (b, c, e) {
                    while (b = b[d]) if (1 === b.nodeType || g) return a(b, c, e);
                    return !1
                } : function (b, c, i) {
                    var j, k, l, m = [w, h];
                    if (i) {
                        while (b = b[d]) if ((1 === b.nodeType || g) && a(b, c, i)) return !0
                    } else while (b = b[d]) if (1 === b.nodeType || g) if (l = b[u] || (b[u] = {}), k = l[b.uniqueID] || (l[b.uniqueID] = {}), e && e === b.nodeName.toLowerCase()) b = b[d] || b; else {
                        if ((j = k[f]) && j[0] === w && j[1] === h) return m[2] = j[2];
                        if (k[f] = m, m[2] = a(b, c, i)) return !0
                    }
                    return !1
                }
            }

            function ua(a) {
                return a.length > 1 ? function (b, c, d) {
                    var e = a.length;
                    while (e--) if (!a[e](b, c, d)) return !1;
                    return !0
                } : a[0]
            }

            function va(a, b, c) {
                for (var d = 0, e = b.length; d < e; d++) ga(a, b[d], c);
                return c
            }

            function wa(a, b, c, d, e) {
                for (var f, g = [], h = 0, i = a.length, j = null != b; h < i; h++) (f = a[h]) && (c && !c(f, d, e) || (g.push(f), j && b.push(h)));
                return g
            }

            function xa(a, b, c, d, e, f) {
                return d && !d[u] && (d = xa(d)), e && !e[u] && (e = xa(e, f)), ia(function (f, g, h, i) {
                    var j, k, l, m = [], n = [], o = g.length, p = f || va(b || "*", h.nodeType ? [h] : h, []),
                        q = !a || !f && b ? p : wa(p, m, a, h, i), r = c ? e || (f ? a : o || d) ? [] : g : q;
                    if (c && c(q, r, h, i), d) {
                        j = wa(r, n), d(j, [], h, i), k = j.length;
                        while (k--) (l = j[k]) && (r[n[k]] = !(q[n[k]] = l))
                    }
                    if (f) {
                        if (e || a) {
                            if (e) {
                                j = [], k = r.length;
                                while (k--) (l = r[k]) && j.push(q[k] = l);
                                e(null, r = [], j, i)
                            }
                            k = r.length;
                            while (k--) (l = r[k]) && (j = e ? I(f, l) : m[k]) > -1 && (f[j] = !(g[j] = l))
                        }
                    } else r = wa(r === g ? r.splice(o, r.length) : r), e ? e(null, g, r, i) : G.apply(g, r)
                })
            }

            function ya(a) {
                for (var b, c, e, f = a.length, g = d.relative[a[0].type], h = g || d.relative[" "], i = g ? 1 : 0, k = ta(function (a) {
                    return a === b
                }, h, !0), l = ta(function (a) {
                    return I(b, a) > -1
                }, h, !0), m = [function (a, c, d) {
                    var e = !g && (d || c !== j) || ((b = c).nodeType ? k(a, c, d) : l(a, c, d));
                    return b = null, e
                }]; i < f; i++) if (c = d.relative[a[i].type]) m = [ta(ua(m), c)]; else {
                    if (c = d.filter[a[i].type].apply(null, a[i].matches), c[u]) {
                        for (e = ++i; e < f; e++) if (d.relative[a[e].type]) break;
                        return xa(i > 1 && ua(m), i > 1 && sa(a.slice(0, i - 1).concat({value: " " === a[i - 2].type ? "*" : ""})).replace(P, "$1"), c, i < e && ya(a.slice(i, e)), e < f && ya(a = a.slice(e)), e < f && sa(a))
                    }
                    m.push(c)
                }
                return ua(m)
            }

            function za(a, b) {
                var c = b.length > 0, e = a.length > 0, f = function (f, g, h, i, k) {
                    var l, o, q, r = 0, s = "0", t = f && [], u = [], v = j, x = f || e && d.find.TAG("*", k),
                        y = w += null == v ? 1 : Math.random() || .1, z = x.length;
                    for (k && (j = g === n || g || k); s !== z && null != (l = x[s]); s++) {
                        if (e && l) {
                            o = 0, g || l.ownerDocument === n || (m(l), h = !p);
                            while (q = a[o++]) if (q(l, g || n, h)) {
                                i.push(l);
                                break
                            }
                            k && (w = y)
                        }
                        c && ((l = !q && l) && r--, f && t.push(l))
                    }
                    if (r += s, c && s !== r) {
                        o = 0;
                        while (q = b[o++]) q(t, u, g, h);
                        if (f) {
                            if (r > 0) while (s--) t[s] || u[s] || (u[s] = E.call(i));
                            u = wa(u)
                        }
                        G.apply(i, u), k && !f && u.length > 0 && r + b.length > 1 && ga.uniqueSort(i)
                    }
                    return k && (w = y, j = v), t
                };
                return c ? ia(f) : f
            }

            return h = ga.compile = function (a, b) {
                var c, d = [], e = [], f = A[a + " "];
                if (!f) {
                    b || (b = g(a)), c = b.length;
                    while (c--) f = ya(b[c]), f[u] ? d.push(f) : e.push(f);
                    f = A(a, za(e, d)), f.selector = a
                }
                return f
            }, i = ga.select = function (a, b, c, e) {
                var f, i, j, k, l, m = "function" == typeof a && a, n = !e && g(a = m.selector || a);
                if (c = c || [], 1 === n.length) {
                    if (i = n[0] = n[0].slice(0), i.length > 2 && "ID" === (j = i[0]).type && 9 === b.nodeType && p && d.relative[i[1].type]) {
                        if (b = (d.find.ID(j.matches[0].replace(_, aa), b) || [])[0], !b) return c;
                        m && (b = b.parentNode), a = a.slice(i.shift().value.length)
                    }
                    f = V.needsContext.test(a) ? 0 : i.length;
                    while (f--) {
                        if (j = i[f], d.relative[k = j.type]) break;
                        if ((l = d.find[k]) && (e = l(j.matches[0].replace(_, aa), $.test(i[0].type) && qa(b.parentNode) || b))) {
                            if (i.splice(f, 1), a = e.length && sa(i), !a) return G.apply(c, e), c;
                            break
                        }
                    }
                }
                return (m || h(a, n))(e, b, !p, c, !b || $.test(a) && qa(b.parentNode) || b), c
            }, c.sortStable = u.split("").sort(B).join("") === u, c.detectDuplicates = !!l, m(), c.sortDetached = ja(function (a) {
                return 1 & a.compareDocumentPosition(n.createElement("fieldset"))
            }), ja(function (a) {
                return a.innerHTML = "<a href='#'></a>", "#" === a.firstChild.getAttribute("href")
            }) || ka("type|href|height|width", function (a, b, c) {
                if (!c) return a.getAttribute(b, "type" === b.toLowerCase() ? 1 : 2)
            }), c.attributes && ja(function (a) {
                return a.innerHTML = "<input/>", a.firstChild.setAttribute("value", ""), "" === a.firstChild.getAttribute("value")
            }) || ka("value", function (a, b, c) {
                if (!c && "input" === a.nodeName.toLowerCase()) return a.defaultValue
            }), ja(function (a) {
                return null == a.getAttribute("disabled")
            }) || ka(J, function (a, b, c) {
                var d;
                if (!c) return a[b] === !0 ? b.toLowerCase() : (d = a.getAttributeNode(b)) && d.specified ? d.value : null
            }), ga
        }(a);
        r.find = x, r.expr = x.selectors, r.expr[":"] = r.expr.pseudos, r.uniqueSort = r.unique = x.uniqueSort, r.text = x.getText, r.isXMLDoc = x.isXML, r.contains = x.contains, r.escapeSelector = x.escape;
        var y = function (a, b, c) {
            var d = [], e = void 0 !== c;
            while ((a = a[b]) && 9 !== a.nodeType) if (1 === a.nodeType) {
                if (e && r(a).is(c)) break;
                d.push(a)
            }
            return d
        }, z = function (a, b) {
            for (var c = []; a; a = a.nextSibling) 1 === a.nodeType && a !== b && c.push(a);
            return c
        }, A = r.expr.match.needsContext;

        function B(a, b) {
            return a.nodeName && a.nodeName.toLowerCase() === b.toLowerCase()
        }

        var C = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i, D = /^.[^:#\[\.,]*$/;

        function E(a, b, c) {
            return r.isFunction(b) ? r.grep(a, function (a, d) {
                return !!b.call(a, d, a) !== c
            }) : b.nodeType ? r.grep(a, function (a) {
                return a === b !== c
            }) : "string" != typeof b ? r.grep(a, function (a) {
                return i.call(b, a) > -1 !== c
            }) : D.test(b) ? r.filter(b, a, c) : (b = r.filter(b, a), r.grep(a, function (a) {
                return i.call(b, a) > -1 !== c && 1 === a.nodeType
            }))
        }

        r.filter = function (a, b, c) {
            var d = b[0];
            return c && (a = ":not(" + a + ")"), 1 === b.length && 1 === d.nodeType ? r.find.matchesSelector(d, a) ? [d] : [] : r.find.matches(a, r.grep(b, function (a) {
                return 1 === a.nodeType
            }))
        }, r.fn.extend({
            find: function (a) {
                var b, c, d = this.length, e = this;
                if ("string" != typeof a) return this.pushStack(r(a).filter(function () {
                    for (b = 0; b < d; b++) if (r.contains(e[b], this)) return !0
                }));
                for (c = this.pushStack([]), b = 0; b < d; b++) r.find(a, e[b], c);
                return d > 1 ? r.uniqueSort(c) : c
            }, filter: function (a) {
                return this.pushStack(E(this, a || [], !1))
            }, not: function (a) {
                return this.pushStack(E(this, a || [], !0))
            }, is: function (a) {
                return !!E(this, "string" == typeof a && A.test(a) ? r(a) : a || [], !1).length
            }
        });
        var F, G = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/, H = r.fn.init = function (a, b, c) {
            var e, f;
            if (!a) return this;
            if (c = c || F, "string" == typeof a) {
                if (e = "<" === a[0] && ">" === a[a.length - 1] && a.length >= 3 ? [null, a, null] : G.exec(a), !e || !e[1] && b) return !b || b.jquery ? (b || c).find(a) : this.constructor(b).find(a);
                if (e[1]) {
                    if (b = b instanceof r ? b[0] : b, r.merge(this, r.parseHTML(e[1], b && b.nodeType ? b.ownerDocument || b : d, !0)), C.test(e[1]) && r.isPlainObject(b)) for (e in b) r.isFunction(this[e]) ? this[e](b[e]) : this.attr(e, b[e]);
                    return this
                }
                return f = d.getElementById(e[2]), f && (this[0] = f, this.length = 1), this
            }
            return a.nodeType ? (this[0] = a, this.length = 1, this) : r.isFunction(a) ? void 0 !== c.ready ? c.ready(a) : a(r) : r.makeArray(a, this)
        };
        H.prototype = r.fn, F = r(d);
        var I = /^(?:parents|prev(?:Until|All))/, J = {children: !0, contents: !0, next: !0, prev: !0};
        r.fn.extend({
            has: function (a) {
                var b = r(a, this), c = b.length;
                return this.filter(function () {
                    for (var a = 0; a < c; a++) if (r.contains(this, b[a])) return !0
                })
            }, closest: function (a, b) {
                var c, d = 0, e = this.length, f = [], g = "string" != typeof a && r(a);
                if (!A.test(a)) for (; d < e; d++) for (c = this[d]; c && c !== b; c = c.parentNode) if (c.nodeType < 11 && (g ? g.index(c) > -1 : 1 === c.nodeType && r.find.matchesSelector(c, a))) {
                    f.push(c);
                    break
                }
                return this.pushStack(f.length > 1 ? r.uniqueSort(f) : f)
            }, index: function (a) {
                return a ? "string" == typeof a ? i.call(r(a), this[0]) : i.call(this, a.jquery ? a[0] : a) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
            }, add: function (a, b) {
                return this.pushStack(r.uniqueSort(r.merge(this.get(), r(a, b))))
            }, addBack: function (a) {
                return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
            }
        });

        function K(a, b) {
            while ((a = a[b]) && 1 !== a.nodeType) ;
            return a
        }

        r.each({
            parent: function (a) {
                var b = a.parentNode;
                return b && 11 !== b.nodeType ? b : null
            }, parents: function (a) {
                return y(a, "parentNode")
            }, parentsUntil: function (a, b, c) {
                return y(a, "parentNode", c)
            }, next: function (a) {
                return K(a, "nextSibling")
            }, prev: function (a) {
                return K(a, "previousSibling")
            }, nextAll: function (a) {
                return y(a, "nextSibling")
            }, prevAll: function (a) {
                return y(a, "previousSibling")
            }, nextUntil: function (a, b, c) {
                return y(a, "nextSibling", c)
            }, prevUntil: function (a, b, c) {
                return y(a, "previousSibling", c)
            }, siblings: function (a) {
                return z((a.parentNode || {}).firstChild, a)
            }, children: function (a) {
                return z(a.firstChild)
            }, contents: function (a) {
                return B(a, "iframe") ? a.contentDocument : (B(a, "template") && (a = a.content || a), r.merge([], a.childNodes))
            }
        }, function (a, b) {
            r.fn[a] = function (c, d) {
                var e = r.map(this, b, c);
                return "Until" !== a.slice(-5) && (d = c), d && "string" == typeof d && (e = r.filter(d, e)), this.length > 1 && (J[a] || r.uniqueSort(e), I.test(a) && e.reverse()), this.pushStack(e)
            }
        });
        var L = /[^\x20\t\r\n\f]+/g;

        function M(a) {
            var b = {};
            return r.each(a.match(L) || [], function (a, c) {
                b[c] = !0
            }), b
        }

        r.Callbacks = function (a) {
            a = "string" == typeof a ? M(a) : r.extend({}, a);
            var b, c, d, e, f = [], g = [], h = -1, i = function () {
                for (e = e || a.once, d = b = !0; g.length; h = -1) {
                    c = g.shift();
                    while (++h < f.length) f[h].apply(c[0], c[1]) === !1 && a.stopOnFalse && (h = f.length, c = !1)
                }
                a.memory || (c = !1), b = !1, e && (f = c ? [] : "")
            }, j = {
                add: function () {
                    return f && (c && !b && (h = f.length - 1, g.push(c)), function d(b) {
                        r.each(b, function (b, c) {
                            r.isFunction(c) ? a.unique && j.has(c) || f.push(c) : c && c.length && "string" !== r.type(c) && d(c)
                        })
                    }(arguments), c && !b && i()), this
                }, remove: function () {
                    return r.each(arguments, function (a, b) {
                        var c;
                        while ((c = r.inArray(b, f, c)) > -1) f.splice(c, 1), c <= h && h--
                    }), this
                }, has: function (a) {
                    return a ? r.inArray(a, f) > -1 : f.length > 0
                }, empty: function () {
                    return f && (f = []), this
                }, disable: function () {
                    return e = g = [], f = c = "", this
                }, disabled: function () {
                    return !f
                }, lock: function () {
                    return e = g = [], c || b || (f = c = ""), this
                }, locked: function () {
                    return !!e
                }, fireWith: function (a, c) {
                    return e || (c = c || [], c = [a, c.slice ? c.slice() : c], g.push(c), b || i()), this
                }, fire: function () {
                    return j.fireWith(this, arguments), this
                }, fired: function () {
                    return !!d
                }
            };
            return j
        };

        function N(a) {
            return a
        }

        function O(a) {
            throw a
        }

        function P(a, b, c, d) {
            var e;
            try {
                a && r.isFunction(e = a.promise) ? e.call(a).done(b).fail(c) : a && r.isFunction(e = a.then) ? e.call(a, b, c) : b.apply(void 0, [a].slice(d))
            } catch (a) {
                c.apply(void 0, [a])
            }
        }

        r.extend({
            Deferred: function (b) {
                var c = [["notify", "progress", r.Callbacks("memory"), r.Callbacks("memory"), 2], ["resolve", "done", r.Callbacks("once memory"), r.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", r.Callbacks("once memory"), r.Callbacks("once memory"), 1, "rejected"]],
                    d = "pending", e = {
                        state: function () {
                            return d
                        }, always: function () {
                            return f.done(arguments).fail(arguments), this
                        }, "catch": function (a) {
                            return e.then(null, a)
                        }, pipe: function () {
                            var a = arguments;
                            return r.Deferred(function (b) {
                                r.each(c, function (c, d) {
                                    var e = r.isFunction(a[d[4]]) && a[d[4]];
                                    f[d[1]](function () {
                                        var a = e && e.apply(this, arguments);
                                        a && r.isFunction(a.promise) ? a.promise().progress(b.notify).done(b.resolve).fail(b.reject) : b[d[0] + "With"](this, e ? [a] : arguments)
                                    })
                                }), a = null
                            }).promise()
                        }, then: function (b, d, e) {
                            var f = 0;

                            function g(b, c, d, e) {
                                return function () {
                                    var h = this, i = arguments, j = function () {
                                        var a, j;
                                        if (!(b < f)) {
                                            if (a = d.apply(h, i), a === c.promise()) throw new TypeError("Thenable self-resolution");
                                            j = a && ("object" == typeof a || "function" == typeof a) && a.then, r.isFunction(j) ? e ? j.call(a, g(f, c, N, e), g(f, c, O, e)) : (f++, j.call(a, g(f, c, N, e), g(f, c, O, e), g(f, c, N, c.notifyWith))) : (d !== N && (h = void 0, i = [a]), (e || c.resolveWith)(h, i))
                                        }
                                    }, k = e ? j : function () {
                                        try {
                                            j()
                                        } catch (a) {
                                            r.Deferred.exceptionHook && r.Deferred.exceptionHook(a, k.stackTrace), b + 1 >= f && (d !== O && (h = void 0, i = [a]), c.rejectWith(h, i))
                                        }
                                    };
                                    b ? k() : (r.Deferred.getStackHook && (k.stackTrace = r.Deferred.getStackHook()), a.setTimeout(k))
                                }
                            }

                            return r.Deferred(function (a) {
                                c[0][3].add(g(0, a, r.isFunction(e) ? e : N, a.notifyWith)), c[1][3].add(g(0, a, r.isFunction(b) ? b : N)), c[2][3].add(g(0, a, r.isFunction(d) ? d : O))
                            }).promise()
                        }, promise: function (a) {
                            return null != a ? r.extend(a, e) : e
                        }
                    }, f = {};
                return r.each(c, function (a, b) {
                    var g = b[2], h = b[5];
                    e[b[1]] = g.add, h && g.add(function () {
                        d = h
                    }, c[3 - a][2].disable, c[0][2].lock), g.add(b[3].fire), f[b[0]] = function () {
                        return f[b[0] + "With"](this === f ? void 0 : this, arguments), this
                    }, f[b[0] + "With"] = g.fireWith
                }), e.promise(f), b && b.call(f, f), f
            }, when: function (a) {
                var b = arguments.length, c = b, d = Array(c), e = f.call(arguments), g = r.Deferred(),
                    h = function (a) {
                        return function (c) {
                            d[a] = this, e[a] = arguments.length > 1 ? f.call(arguments) : c, --b || g.resolveWith(d, e)
                        }
                    };
                if (b <= 1 && (P(a, g.done(h(c)).resolve, g.reject, !b), "pending" === g.state() || r.isFunction(e[c] && e[c].then))) return g.then();
                while (c--) P(e[c], h(c), g.reject);
                return g.promise()
            }
        });
        var Q = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
        r.Deferred.exceptionHook = function (b, c) {
            a.console && a.console.warn && b && Q.test(b.name) && a.console.warn("jQuery.Deferred exception: " + b.message, b.stack, c)
        }, r.readyException = function (b) {
            a.setTimeout(function () {
                throw b
            })
        };
        var R = r.Deferred();
        r.fn.ready = function (a) {
            return R.then(a)["catch"](function (a) {
                r.readyException(a)
            }), this
        }, r.extend({
            isReady: !1, readyWait: 1, ready: function (a) {
                (a === !0 ? --r.readyWait : r.isReady) || (r.isReady = !0, a !== !0 && --r.readyWait > 0 || R.resolveWith(d, [r]))
            }
        }), r.ready.then = R.then;

        function S() {
            d.removeEventListener("DOMContentLoaded", S),
                a.removeEventListener("load", S), r.ready()
        }

        "complete" === d.readyState || "loading" !== d.readyState && !d.documentElement.doScroll ? a.setTimeout(r.ready) : (d.addEventListener("DOMContentLoaded", S), a.addEventListener("load", S));
        var T = function (a, b, c, d, e, f, g) {
            var h = 0, i = a.length, j = null == c;
            if ("object" === r.type(c)) {
                e = !0;
                for (h in c) T(a, b, h, c[h], !0, f, g)
            } else if (void 0 !== d && (e = !0, r.isFunction(d) || (g = !0), j && (g ? (b.call(a, d), b = null) : (j = b, b = function (a, b, c) {
                    return j.call(r(a), c)
                })), b)) for (; h < i; h++) b(a[h], c, g ? d : d.call(a[h], h, b(a[h], c)));
            return e ? a : j ? b.call(a) : i ? b(a[0], c) : f
        }, U = function (a) {
            return 1 === a.nodeType || 9 === a.nodeType || !+a.nodeType
        };

        function V() {
            this.expando = r.expando + V.uid++
        }

        V.uid = 1, V.prototype = {
            cache: function (a) {
                var b = a[this.expando];
                return b || (b = {}, U(a) && (a.nodeType ? a[this.expando] = b : Object.defineProperty(a, this.expando, {
                    value: b,
                    configurable: !0
                }))), b
            }, set: function (a, b, c) {
                var d, e = this.cache(a);
                if ("string" == typeof b) e[r.camelCase(b)] = c; else for (d in b) e[r.camelCase(d)] = b[d];
                return e
            }, get: function (a, b) {
                return void 0 === b ? this.cache(a) : a[this.expando] && a[this.expando][r.camelCase(b)]
            }, access: function (a, b, c) {
                return void 0 === b || b && "string" == typeof b && void 0 === c ? this.get(a, b) : (this.set(a, b, c), void 0 !== c ? c : b)
            }, remove: function (a, b) {
                var c, d = a[this.expando];
                if (void 0 !== d) {
                    if (void 0 !== b) {
                        Array.isArray(b) ? b = b.map(r.camelCase) : (b = r.camelCase(b), b = b in d ? [b] : b.match(L) || []), c = b.length;
                        while (c--) delete d[b[c]]
                    }
                    (void 0 === b || r.isEmptyObject(d)) && (a.nodeType ? a[this.expando] = void 0 : delete a[this.expando])
                }
            }, hasData: function (a) {
                var b = a[this.expando];
                return void 0 !== b && !r.isEmptyObject(b)
            }
        };
        var W = new V, X = new V, Y = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/, Z = /[A-Z]/g;

        function $(a) {
            return "true" === a || "false" !== a && ("null" === a ? null : a === +a + "" ? +a : Y.test(a) ? JSON.parse(a) : a)
        }

        function _(a, b, c) {
            var d;
            if (void 0 === c && 1 === a.nodeType) if (d = "data-" + b.replace(Z, "-$&").toLowerCase(), c = a.getAttribute(d), "string" == typeof c) {
                try {
                    c = $(c)
                } catch (e) {
                }
                X.set(a, b, c)
            } else c = void 0;
            return c
        }

        r.extend({
            hasData: function (a) {
                return X.hasData(a) || W.hasData(a)
            }, data: function (a, b, c) {
                return X.access(a, b, c)
            }, removeData: function (a, b) {
                X.remove(a, b)
            }, _data: function (a, b, c) {
                return W.access(a, b, c)
            }, _removeData: function (a, b) {
                W.remove(a, b)
            }
        }), r.fn.extend({
            data: function (a, b) {
                var c, d, e, f = this[0], g = f && f.attributes;
                if (void 0 === a) {
                    if (this.length && (e = X.get(f), 1 === f.nodeType && !W.get(f, "hasDataAttrs"))) {
                        c = g.length;
                        while (c--) g[c] && (d = g[c].name, 0 === d.indexOf("data-") && (d = r.camelCase(d.slice(5)), _(f, d, e[d])));
                        W.set(f, "hasDataAttrs", !0)
                    }
                    return e
                }
                return "object" == typeof a ? this.each(function () {
                    X.set(this, a)
                }) : T(this, function (b) {
                    var c;
                    if (f && void 0 === b) {
                        if (c = X.get(f, a), void 0 !== c) return c;
                        if (c = _(f, a), void 0 !== c) return c
                    } else this.each(function () {
                        X.set(this, a, b)
                    })
                }, null, b, arguments.length > 1, null, !0)
            }, removeData: function (a) {
                return this.each(function () {
                    X.remove(this, a)
                })
            }
        }), r.extend({
            queue: function (a, b, c) {
                var d;
                if (a) return b = (b || "fx") + "queue", d = W.get(a, b), c && (!d || Array.isArray(c) ? d = W.access(a, b, r.makeArray(c)) : d.push(c)), d || []
            }, dequeue: function (a, b) {
                b = b || "fx";
                var c = r.queue(a, b), d = c.length, e = c.shift(), f = r._queueHooks(a, b), g = function () {
                    r.dequeue(a, b)
                };
                "inprogress" === e && (e = c.shift(), d--), e && ("fx" === b && c.unshift("inprogress"), delete f.stop, e.call(a, g, f)), !d && f && f.empty.fire()
            }, _queueHooks: function (a, b) {
                var c = b + "queueHooks";
                return W.get(a, c) || W.access(a, c, {
                    empty: r.Callbacks("once memory").add(function () {
                        W.remove(a, [b + "queue", c])
                    })
                })
            }
        }), r.fn.extend({
            queue: function (a, b) {
                var c = 2;
                return "string" != typeof a && (b = a, a = "fx", c--), arguments.length < c ? r.queue(this[0], a) : void 0 === b ? this : this.each(function () {
                    var c = r.queue(this, a, b);
                    r._queueHooks(this, a), "fx" === a && "inprogress" !== c[0] && r.dequeue(this, a)
                })
            }, dequeue: function (a) {
                return this.each(function () {
                    r.dequeue(this, a)
                })
            }, clearQueue: function (a) {
                return this.queue(a || "fx", [])
            }, promise: function (a, b) {
                var c, d = 1, e = r.Deferred(), f = this, g = this.length, h = function () {
                    --d || e.resolveWith(f, [f])
                };
                "string" != typeof a && (b = a, a = void 0), a = a || "fx";
                while (g--) c = W.get(f[g], a + "queueHooks"), c && c.empty && (d++, c.empty.add(h));
                return h(), e.promise(b)
            }
        });
        var aa = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
            ba = new RegExp("^(?:([+-])=|)(" + aa + ")([a-z%]*)$", "i"), ca = ["Top", "Right", "Bottom", "Left"],
            da = function (a, b) {
                return a = b || a, "none" === a.style.display || "" === a.style.display && r.contains(a.ownerDocument, a) && "none" === r.css(a, "display")
            }, ea = function (a, b, c, d) {
                var e, f, g = {};
                for (f in b) g[f] = a.style[f], a.style[f] = b[f];
                e = c.apply(a, d || []);
                for (f in b) a.style[f] = g[f];
                return e
            };

        function fa(a, b, c, d) {
            var e, f = 1, g = 20, h = d ? function () {
                    return d.cur()
                } : function () {
                    return r.css(a, b, "")
                }, i = h(), j = c && c[3] || (r.cssNumber[b] ? "" : "px"),
                k = (r.cssNumber[b] || "px" !== j && +i) && ba.exec(r.css(a, b));
            if (k && k[3] !== j) {
                j = j || k[3], c = c || [], k = +i || 1;
                do f = f || ".5", k /= f, r.style(a, b, k + j); while (f !== (f = h() / i) && 1 !== f && --g)
            }
            return c && (k = +k || +i || 0, e = c[1] ? k + (c[1] + 1) * c[2] : +c[2], d && (d.unit = j, d.start = k, d.end = e)), e
        }

        var ga = {};

        function ha(a) {
            var b, c = a.ownerDocument, d = a.nodeName, e = ga[d];
            return e ? e : (b = c.body.appendChild(c.createElement(d)), e = r.css(b, "display"), b.parentNode.removeChild(b), "none" === e && (e = "block"), ga[d] = e, e)
        }

        function ia(a, b) {
            for (var c, d, e = [], f = 0, g = a.length; f < g; f++) d = a[f], d.style && (c = d.style.display, b ? ("none" === c && (e[f] = W.get(d, "display") || null, e[f] || (d.style.display = "")), "" === d.style.display && da(d) && (e[f] = ha(d))) : "none" !== c && (e[f] = "none", W.set(d, "display", c)));
            for (f = 0; f < g; f++) null != e[f] && (a[f].style.display = e[f]);
            return a
        }

        r.fn.extend({
            show: function () {
                return ia(this, !0)
            }, hide: function () {
                return ia(this)
            }, toggle: function (a) {
                return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function () {
                    da(this) ? r(this).show() : r(this).hide()
                })
            }
        });
        var ja = /^(?:checkbox|radio)$/i, ka = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i, la = /^$|\/(?:java|ecma)script/i,
            ma = {
                option: [1, "<select multiple='multiple'>", "</select>"],
                thead: [1, "<table>", "</table>"],
                col: [2, "<table><colgroup>", "</colgroup></table>"],
                tr: [2, "<table><tbody>", "</tbody></table>"],
                td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
                _default: [0, "", ""]
            };
        ma.optgroup = ma.option, ma.tbody = ma.tfoot = ma.colgroup = ma.caption = ma.thead, ma.th = ma.td;

        function na(a, b) {
            var c;
            return c = "undefined" != typeof a.getElementsByTagName ? a.getElementsByTagName(b || "*") : "undefined" != typeof a.querySelectorAll ? a.querySelectorAll(b || "*") : [], void 0 === b || b && B(a, b) ? r.merge([a], c) : c
        }

        function oa(a, b) {
            for (var c = 0, d = a.length; c < d; c++) W.set(a[c], "globalEval", !b || W.get(b[c], "globalEval"))
        }

        var pa = /<|&#?\w+;/;

        function qa(a, b, c, d, e) {
            for (var f, g, h, i, j, k, l = b.createDocumentFragment(), m = [], n = 0, o = a.length; n < o; n++) if (f = a[n], f || 0 === f) if ("object" === r.type(f)) r.merge(m, f.nodeType ? [f] : f); else if (pa.test(f)) {
                g = g || l.appendChild(b.createElement("div")), h = (ka.exec(f) || ["", ""])[1].toLowerCase(), i = ma[h] || ma._default, g.innerHTML = i[1] + r.htmlPrefilter(f) + i[2], k = i[0];
                while (k--) g = g.lastChild;
                r.merge(m, g.childNodes), g = l.firstChild, g.textContent = ""
            } else m.push(b.createTextNode(f));
            l.textContent = "", n = 0;
            while (f = m[n++]) if (d && r.inArray(f, d) > -1) e && e.push(f); else if (j = r.contains(f.ownerDocument, f), g = na(l.appendChild(f), "script"), j && oa(g), c) {
                k = 0;
                while (f = g[k++]) la.test(f.type || "") && c.push(f)
            }
            return l
        }

        !function () {
            var a = d.createDocumentFragment(), b = a.appendChild(d.createElement("div")), c = d.createElement("input");
            c.setAttribute("type", "radio"), c.setAttribute("checked", "checked"), c.setAttribute("name", "t"), b.appendChild(c), o.checkClone = b.cloneNode(!0).cloneNode(!0).lastChild.checked, b.innerHTML = "<textarea>x</textarea>", o.noCloneChecked = !!b.cloneNode(!0).lastChild.defaultValue
        }();
        var ra = d.documentElement, sa = /^key/, ta = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
            ua = /^([^.]*)(?:\.(.+)|)/;

        function va() {
            return !0
        }

        function wa() {
            return !1
        }

        function xa() {
            try {
                return d.activeElement
            } catch (a) {
            }
        }

        function ya(a, b, c, d, e, f) {
            var g, h;
            if ("object" == typeof b) {
                "string" != typeof c && (d = d || c, c = void 0);
                for (h in b) ya(a, h, c, d, b[h], f);
                return a
            }
            if (null == d && null == e ? (e = c, d = c = void 0) : null == e && ("string" == typeof c ? (e = d, d = void 0) : (e = d, d = c, c = void 0)), e === !1) e = wa; else if (!e) return a;
            return 1 === f && (g = e, e = function (a) {
                return r().off(a), g.apply(this, arguments)
            }, e.guid = g.guid || (g.guid = r.guid++)), a.each(function () {
                r.event.add(this, b, e, d, c)
            })
        }

        r.event = {
            global: {}, add: function (a, b, c, d, e) {
                var f, g, h, i, j, k, l, m, n, o, p, q = W.get(a);
                if (q) {
                    c.handler && (f = c, c = f.handler, e = f.selector), e && r.find.matchesSelector(ra, e), c.guid || (c.guid = r.guid++), (i = q.events) || (i = q.events = {}), (g = q.handle) || (g = q.handle = function (b) {
                        return "undefined" != typeof r && r.event.triggered !== b.type ? r.event.dispatch.apply(a, arguments) : void 0
                    }), b = (b || "").match(L) || [""], j = b.length;
                    while (j--) h = ua.exec(b[j]) || [], n = p = h[1], o = (h[2] || "").split(".").sort(), n && (l = r.event.special[n] || {}, n = (e ? l.delegateType : l.bindType) || n, l = r.event.special[n] || {}, k = r.extend({
                        type: n,
                        origType: p,
                        data: d,
                        handler: c,
                        guid: c.guid,
                        selector: e,
                        needsContext: e && r.expr.match.needsContext.test(e),
                        namespace: o.join(".")
                    }, f), (m = i[n]) || (m = i[n] = [], m.delegateCount = 0, l.setup && l.setup.call(a, d, o, g) !== !1 || a.addEventListener && a.addEventListener(n, g)), l.add && (l.add.call(a, k), k.handler.guid || (k.handler.guid = c.guid)), e ? m.splice(m.delegateCount++, 0, k) : m.push(k), r.event.global[n] = !0)
                }
            }, remove: function (a, b, c, d, e) {
                var f, g, h, i, j, k, l, m, n, o, p, q = W.hasData(a) && W.get(a);
                if (q && (i = q.events)) {
                    b = (b || "").match(L) || [""], j = b.length;
                    while (j--) if (h = ua.exec(b[j]) || [], n = p = h[1], o = (h[2] || "").split(".").sort(), n) {
                        l = r.event.special[n] || {}, n = (d ? l.delegateType : l.bindType) || n, m = i[n] || [], h = h[2] && new RegExp("(^|\\.)" + o.join("\\.(?:.*\\.|)") + "(\\.|$)"), g = f = m.length;
                        while (f--) k = m[f], !e && p !== k.origType || c && c.guid !== k.guid || h && !h.test(k.namespace) || d && d !== k.selector && ("**" !== d || !k.selector) || (m.splice(f, 1), k.selector && m.delegateCount--, l.remove && l.remove.call(a, k));
                        g && !m.length && (l.teardown && l.teardown.call(a, o, q.handle) !== !1 || r.removeEvent(a, n, q.handle), delete i[n])
                    } else for (n in i) r.event.remove(a, n + b[j], c, d, !0);
                    r.isEmptyObject(i) && W.remove(a, "handle events")
                }
            }, dispatch: function (a) {
                var b = r.event.fix(a), c, d, e, f, g, h, i = new Array(arguments.length),
                    j = (W.get(this, "events") || {})[b.type] || [], k = r.event.special[b.type] || {};
                for (i[0] = b, c = 1; c < arguments.length; c++) i[c] = arguments[c];
                if (b.delegateTarget = this, !k.preDispatch || k.preDispatch.call(this, b) !== !1) {
                    h = r.event.handlers.call(this, b, j), c = 0;
                    while ((f = h[c++]) && !b.isPropagationStopped()) {
                        b.currentTarget = f.elem, d = 0;
                        while ((g = f.handlers[d++]) && !b.isImmediatePropagationStopped()) b.rnamespace && !b.rnamespace.test(g.namespace) || (b.handleObj = g, b.data = g.data, e = ((r.event.special[g.origType] || {}).handle || g.handler).apply(f.elem, i), void 0 !== e && (b.result = e) === !1 && (b.preventDefault(), b.stopPropagation()))
                    }
                    return k.postDispatch && k.postDispatch.call(this, b), b.result
                }
            }, handlers: function (a, b) {
                var c, d, e, f, g, h = [], i = b.delegateCount, j = a.target;
                if (i && j.nodeType && !("click" === a.type && a.button >= 1)) for (; j !== this; j = j.parentNode || this) if (1 === j.nodeType && ("click" !== a.type || j.disabled !== !0)) {
                    for (f = [], g = {}, c = 0; c < i; c++) d = b[c], e = d.selector + " ", void 0 === g[e] && (g[e] = d.needsContext ? r(e, this).index(j) > -1 : r.find(e, this, null, [j]).length), g[e] && f.push(d);
                    f.length && h.push({elem: j, handlers: f})
                }
                return j = this, i < b.length && h.push({elem: j, handlers: b.slice(i)}), h
            }, addProp: function (a, b) {
                Object.defineProperty(r.Event.prototype, a, {
                    enumerable: !0,
                    configurable: !0,
                    get: r.isFunction(b) ? function () {
                        if (this.originalEvent) return b(this.originalEvent)
                    } : function () {
                        if (this.originalEvent) return this.originalEvent[a]
                    },
                    set: function (b) {
                        Object.defineProperty(this, a, {enumerable: !0, configurable: !0, writable: !0, value: b})
                    }
                })
            }, fix: function (a) {
                return a[r.expando] ? a : new r.Event(a)
            }, special: {
                load: {noBubble: !0}, focus: {
                    trigger: function () {
                        if (this !== xa() && this.focus) return this.focus(), !1
                    }, delegateType: "focusin"
                }, blur: {
                    trigger: function () {
                        if (this === xa() && this.blur) return this.blur(), !1
                    }, delegateType: "focusout"
                }, click: {
                    trigger: function () {
                        if ("checkbox" === this.type && this.click && B(this, "input")) return this.click(), !1
                    }, _default: function (a) {
                        return B(a.target, "a")
                    }
                }, beforeunload: {
                    postDispatch: function (a) {
                        void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
                    }
                }
            }
        }, r.removeEvent = function (a, b, c) {
            a.removeEventListener && a.removeEventListener(b, c)
        }, r.Event = function (a, b) {
            return this instanceof r.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && a.returnValue === !1 ? va : wa, this.target = a.target && 3 === a.target.nodeType ? a.target.parentNode : a.target, this.currentTarget = a.currentTarget, this.relatedTarget = a.relatedTarget) : this.type = a, b && r.extend(this, b), this.timeStamp = a && a.timeStamp || r.now(), void(this[r.expando] = !0)) : new r.Event(a, b)
        }, r.Event.prototype = {
            constructor: r.Event,
            isDefaultPrevented: wa,
            isPropagationStopped: wa,
            isImmediatePropagationStopped: wa,
            isSimulated: !1,
            preventDefault: function () {
                var a = this.originalEvent;
                this.isDefaultPrevented = va, a && !this.isSimulated && a.preventDefault()
            },
            stopPropagation: function () {
                var a = this.originalEvent;
                this.isPropagationStopped = va, a && !this.isSimulated && a.stopPropagation()
            },
            stopImmediatePropagation: function () {
                var a = this.originalEvent;
                this.isImmediatePropagationStopped = va, a && !this.isSimulated && a.stopImmediatePropagation(), this.stopPropagation()
            }
        }, r.each({
            altKey: !0,
            bubbles: !0,
            cancelable: !0,
            changedTouches: !0,
            ctrlKey: !0,
            detail: !0,
            eventPhase: !0,
            metaKey: !0,
            pageX: !0,
            pageY: !0,
            shiftKey: !0,
            view: !0,
            "char": !0,
            charCode: !0,
            key: !0,
            keyCode: !0,
            button: !0,
            buttons: !0,
            clientX: !0,
            clientY: !0,
            offsetX: !0,
            offsetY: !0,
            pointerId: !0,
            pointerType: !0,
            screenX: !0,
            screenY: !0,
            targetTouches: !0,
            toElement: !0,
            touches: !0,
            which: function (a) {
                var b = a.button;
                return null == a.which && sa.test(a.type) ? null != a.charCode ? a.charCode : a.keyCode : !a.which && void 0 !== b && ta.test(a.type) ? 1 & b ? 1 : 2 & b ? 3 : 4 & b ? 2 : 0 : a.which
            }
        }, r.event.addProp), r.each({
            mouseenter: "mouseover",
            mouseleave: "mouseout",
            pointerenter: "pointerover",
            pointerleave: "pointerout"
        }, function (a, b) {
            r.event.special[a] = {
                delegateType: b, bindType: b, handle: function (a) {
                    var c, d = this, e = a.relatedTarget, f = a.handleObj;
                    return e && (e === d || r.contains(d, e)) || (a.type = f.origType, c = f.handler.apply(this, arguments), a.type = b), c
                }
            }
        }), r.fn.extend({
            on: function (a, b, c, d) {
                return ya(this, a, b, c, d)
            }, one: function (a, b, c, d) {
                return ya(this, a, b, c, d, 1)
            }, off: function (a, b, c) {
                var d, e;
                if (a && a.preventDefault && a.handleObj) return d = a.handleObj, r(a.delegateTarget).off(d.namespace ? d.origType + "." + d.namespace : d.origType, d.selector, d.handler), this;
                if ("object" == typeof a) {
                    for (e in a) this.off(e, b, a[e]);
                    return this
                }
                return b !== !1 && "function" != typeof b || (c = b, b = void 0), c === !1 && (c = wa), this.each(function () {
                    r.event.remove(this, a, c, b)
                })
            }
        });
        var za = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
            Aa = /<script|<style|<link/i, Ba = /checked\s*(?:[^=]|=\s*.checked.)/i, Ca = /^true\/(.*)/,
            Da = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

        function Ea(a, b) {
            return B(a, "table") && B(11 !== b.nodeType ? b : b.firstChild, "tr") ? r(">tbody", a)[0] || a : a
        }

        function Fa(a) {
            return a.type = (null !== a.getAttribute("type")) + "/" + a.type, a
        }

        function Ga(a) {
            var b = Ca.exec(a.type);
            return b ? a.type = b[1] : a.removeAttribute("type"), a
        }

        function Ha(a, b) {
            var c, d, e, f, g, h, i, j;
            if (1 === b.nodeType) {
                if (W.hasData(a) && (f = W.access(a), g = W.set(b, f), j = f.events)) {
                    delete g.handle, g.events = {};
                    for (e in j) for (c = 0, d = j[e].length; c < d; c++) r.event.add(b, e, j[e][c])
                }
                X.hasData(a) && (h = X.access(a), i = r.extend({}, h), X.set(b, i))
            }
        }

        function Ia(a, b) {
            var c = b.nodeName.toLowerCase();
            "input" === c && ja.test(a.type) ? b.checked = a.checked : "input" !== c && "textarea" !== c || (b.defaultValue = a.defaultValue)
        }

        function Ja(a, b, c, d) {
            b = g.apply([], b);
            var e, f, h, i, j, k, l = 0, m = a.length, n = m - 1, q = b[0], s = r.isFunction(q);
            if (s || m > 1 && "string" == typeof q && !o.checkClone && Ba.test(q)) return a.each(function (e) {
                var f = a.eq(e);
                s && (b[0] = q.call(this, e, f.html())), Ja(f, b, c, d)
            });
            if (m && (e = qa(b, a[0].ownerDocument, !1, a, d), f = e.firstChild, 1 === e.childNodes.length && (e = f), f || d)) {
                for (h = r.map(na(e, "script"), Fa), i = h.length; l < m; l++) j = e, l !== n && (j = r.clone(j, !0, !0), i && r.merge(h, na(j, "script"))), c.call(a[l], j, l);
                if (i) for (k = h[h.length - 1].ownerDocument, r.map(h, Ga), l = 0; l < i; l++) j = h[l], la.test(j.type || "") && !W.access(j, "globalEval") && r.contains(k, j) && (j.src ? r._evalUrl && r._evalUrl(j.src) : p(j.textContent.replace(Da, ""), k))
            }
            return a
        }

        function Ka(a, b, c) {
            for (var d, e = b ? r.filter(b, a) : a, f = 0; null != (d = e[f]); f++) c || 1 !== d.nodeType || r.cleanData(na(d)), d.parentNode && (c && r.contains(d.ownerDocument, d) && oa(na(d, "script")), d.parentNode.removeChild(d));
            return a
        }

        r.extend({
            htmlPrefilter: function (a) {
                return a.replace(za, "<$1></$2>")
            }, clone: function (a, b, c) {
                var d, e, f, g, h = a.cloneNode(!0), i = r.contains(a.ownerDocument, a);
                if (!(o.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || r.isXMLDoc(a))) for (g = na(h), f = na(a), d = 0, e = f.length; d < e; d++) Ia(f[d], g[d]);
                if (b) if (c) for (f = f || na(a), g = g || na(h), d = 0, e = f.length; d < e; d++) Ha(f[d], g[d]); else Ha(a, h);
                return g = na(h, "script"), g.length > 0 && oa(g, !i && na(a, "script")), h
            }, cleanData: function (a) {
                for (var b, c, d, e = r.event.special, f = 0; void 0 !== (c = a[f]); f++) if (U(c)) {
                    if (b = c[W.expando]) {
                        if (b.events) for (d in b.events) e[d] ? r.event.remove(c, d) : r.removeEvent(c, d, b.handle);
                        c[W.expando] = void 0
                    }
                    c[X.expando] && (c[X.expando] = void 0)
                }
            }
        }), r.fn.extend({
            detach: function (a) {
                return Ka(this, a, !0)
            }, remove: function (a) {
                return Ka(this, a)
            }, text: function (a) {
                return T(this, function (a) {
                    return void 0 === a ? r.text(this) : this.empty().each(function () {
                        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = a)
                    })
                }, null, a, arguments.length)
            }, append: function () {
                return Ja(this, arguments, function (a) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var b = Ea(this, a);
                        b.appendChild(a)
                    }
                })
            }, prepend: function () {
                return Ja(this, arguments, function (a) {
                    if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                        var b = Ea(this, a);
                        b.insertBefore(a, b.firstChild)
                    }
                })
            }, before: function () {
                return Ja(this, arguments, function (a) {
                    this.parentNode && this.parentNode.insertBefore(a, this)
                })
            }, after: function () {
                return Ja(this, arguments, function (a) {
                    this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
                })
            }, empty: function () {
                for (var a, b = 0; null != (a = this[b]); b++) 1 === a.nodeType && (r.cleanData(na(a, !1)), a.textContent = "");
                return this
            }, clone: function (a, b) {
                return a = null != a && a, b = null == b ? a : b, this.map(function () {
                    return r.clone(this, a, b)
                })
            }, html: function (a) {
                return T(this, function (a) {
                    var b = this[0] || {}, c = 0, d = this.length;
                    if (void 0 === a && 1 === b.nodeType) return b.innerHTML;
                    if ("string" == typeof a && !Aa.test(a) && !ma[(ka.exec(a) || ["", ""])[1].toLowerCase()]) {
                        a = r.htmlPrefilter(a);
                        try {
                            for (; c < d; c++) b = this[c] || {}, 1 === b.nodeType && (r.cleanData(na(b, !1)), b.innerHTML = a);
                            b = 0
                        } catch (e) {
                        }
                    }
                    b && this.empty().append(a)
                }, null, a, arguments.length)
            }, replaceWith: function () {
                var a = [];
                return Ja(this, arguments, function (b) {
                    var c = this.parentNode;
                    r.inArray(this, a) < 0 && (r.cleanData(na(this)), c && c.replaceChild(b, this))
                }, a)
            }
        }), r.each({
            appendTo: "append",
            prependTo: "prepend",
            insertBefore: "before",
            insertAfter: "after",
            replaceAll: "replaceWith"
        }, function (a, b) {
            r.fn[a] = function (a) {
                for (var c, d = [], e = r(a), f = e.length - 1, g = 0; g <= f; g++) c = g === f ? this : this.clone(!0), r(e[g])[b](c), h.apply(d, c.get());
                return this.pushStack(d)
            }
        });
        var La = /^margin/, Ma = new RegExp("^(" + aa + ")(?!px)[a-z%]+$", "i"), Na = function (b) {
            var c = b.ownerDocument.defaultView;
            return c && c.opener || (c = a), c.getComputedStyle(b)
        };
        !function () {
            function b() {
                if (i) {
                    i.style.cssText = "box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", i.innerHTML = "", ra.appendChild(h);
                    var b = a.getComputedStyle(i);
                    c = "1%" !== b.top, g = "2px" === b.marginLeft, e = "4px" === b.width, i.style.marginRight = "50%", f = "4px" === b.marginRight, ra.removeChild(h), i = null
                }
            }

            var c, e, f, g, h = d.createElement("div"), i = d.createElement("div");
            i.style && (i.style.backgroundClip = "content-box", i.cloneNode(!0).style.backgroundClip = "", o.clearCloneStyle = "content-box" === i.style.backgroundClip, h.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", h.appendChild(i), r.extend(o, {
                pixelPosition: function () {
                    return b(), c
                }, boxSizingReliable: function () {
                    return b(), e
                }, pixelMarginRight: function () {
                    return b(), f
                }, reliableMarginLeft: function () {
                    return b(), g
                }
            }))
        }();

        function Oa(a, b, c) {
            var d, e, f, g, h = a.style;
            return c = c || Na(a), c && (g = c.getPropertyValue(b) || c[b], "" !== g || r.contains(a.ownerDocument, a) || (g = r.style(a, b)), !o.pixelMarginRight() && Ma.test(g) && La.test(b) && (d = h.width, e = h.minWidth, f = h.maxWidth, h.minWidth = h.maxWidth = h.width = g, g = c.width, h.width = d, h.minWidth = e, h.maxWidth = f)), void 0 !== g ? g + "" : g
        }

        function Pa(a, b) {
            return {
                get: function () {
                    return a() ? void delete this.get : (this.get = b).apply(this, arguments)
                }
            }
        }

        var Qa = /^(none|table(?!-c[ea]).+)/, Ra = /^--/,
            Sa = {position: "absolute", visibility: "hidden", display: "block"},
            Ta = {letterSpacing: "0", fontWeight: "400"}, Ua = ["Webkit", "Moz", "ms"],
            Va = d.createElement("div").style;

        function Wa(a) {
            if (a in Va) return a;
            var b = a[0].toUpperCase() + a.slice(1), c = Ua.length;
            while (c--) if (a = Ua[c] + b, a in Va) return a
        }

        function Xa(a) {
            var b = r.cssProps[a];
            return b || (b = r.cssProps[a] = Wa(a) || a), b
        }

        function Ya(a, b, c) {
            var d = ba.exec(b);
            return d ? Math.max(0, d[2] - (c || 0)) + (d[3] || "px") : b
        }

        function Za(a, b, c, d, e) {
            var f, g = 0;
            for (f = c === (d ? "border" : "content") ? 4 : "width" === b ? 1 : 0; f < 4; f += 2) "margin" === c && (g += r.css(a, c + ca[f], !0, e)), d ? ("content" === c && (g -= r.css(a, "padding" + ca[f], !0, e)), "margin" !== c && (g -= r.css(a, "border" + ca[f] + "Width", !0, e))) : (g += r.css(a, "padding" + ca[f], !0, e), "padding" !== c && (g += r.css(a, "border" + ca[f] + "Width", !0, e)));
            return g
        }

        function $a(a, b, c) {
            var d, e = Na(a), f = Oa(a, b, e), g = "border-box" === r.css(a, "boxSizing", !1, e);
            return Ma.test(f) ? f : (d = g && (o.boxSizingReliable() || f === a.style[b]), "auto" === f && (f = a["offset" + b[0].toUpperCase() + b.slice(1)]), f = parseFloat(f) || 0, f + Za(a, b, c || (g ? "border" : "content"), d, e) + "px")
        }

        r.extend({
            cssHooks: {
                opacity: {
                    get: function (a, b) {
                        if (b) {
                            var c = Oa(a, "opacity");
                            return "" === c ? "1" : c
                        }
                    }
                }
            },
            cssNumber: {
                animationIterationCount: !0,
                columnCount: !0,
                fillOpacity: !0,
                flexGrow: !0,
                flexShrink: !0,
                fontWeight: !0,
                lineHeight: !0,
                opacity: !0,
                order: !0,
                orphans: !0,
                widows: !0,
                zIndex: !0,
                zoom: !0
            },
            cssProps: {"float": "cssFloat"},
            style: function (a, b, c, d) {
                if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
                    var e, f, g, h = r.camelCase(b), i = Ra.test(b), j = a.style;
                    return i || (b = Xa(h)), g = r.cssHooks[b] || r.cssHooks[h], void 0 === c ? g && "get" in g && void 0 !== (e = g.get(a, !1, d)) ? e : j[b] : (f = typeof c, "string" === f && (e = ba.exec(c)) && e[1] && (c = fa(a, b, e), f = "number"), null != c && c === c && ("number" === f && (c += e && e[3] || (r.cssNumber[h] ? "" : "px")), o.clearCloneStyle || "" !== c || 0 !== b.indexOf("background") || (j[b] = "inherit"), g && "set" in g && void 0 === (c = g.set(a, c, d)) || (i ? j.setProperty(b, c) : j[b] = c)), void 0)
                }
            },
            css: function (a, b, c, d) {
                var e, f, g, h = r.camelCase(b), i = Ra.test(b);
                return i || (b = Xa(h)), g = r.cssHooks[b] || r.cssHooks[h], g && "get" in g && (e = g.get(a, !0, c)), void 0 === e && (e = Oa(a, b, d)), "normal" === e && b in Ta && (e = Ta[b]), "" === c || c ? (f = parseFloat(e), c === !0 || isFinite(f) ? f || 0 : e) : e
            }
        }), r.each(["height", "width"], function (a, b) {
            r.cssHooks[b] = {
                get: function (a, c, d) {
                    if (c) return !Qa.test(r.css(a, "display")) || a.getClientRects().length && a.getBoundingClientRect().width ? $a(a, b, d) : ea(a, Sa, function () {
                        return $a(a, b, d)
                    })
                }, set: function (a, c, d) {
                    var e, f = d && Na(a), g = d && Za(a, b, d, "border-box" === r.css(a, "boxSizing", !1, f), f);
                    return g && (e = ba.exec(c)) && "px" !== (e[3] || "px") && (a.style[b] = c, c = r.css(a, b)), Ya(a, c, g)
                }
            }
        }), r.cssHooks.marginLeft = Pa(o.reliableMarginLeft, function (a, b) {
            if (b) return (parseFloat(Oa(a, "marginLeft")) || a.getBoundingClientRect().left - ea(a, {marginLeft: 0}, function () {
                return a.getBoundingClientRect().left
            })) + "px"
        }), r.each({margin: "", padding: "", border: "Width"}, function (a, b) {
            r.cssHooks[a + b] = {
                expand: function (c) {
                    for (var d = 0, e = {}, f = "string" == typeof c ? c.split(" ") : [c]; d < 4; d++) e[a + ca[d] + b] = f[d] || f[d - 2] || f[0];
                    return e
                }
            }, La.test(a) || (r.cssHooks[a + b].set = Ya)
        }), r.fn.extend({
            css: function (a, b) {
                return T(this, function (a, b, c) {
                    var d, e, f = {}, g = 0;
                    if (Array.isArray(b)) {
                        for (d = Na(a), e = b.length; g < e; g++) f[b[g]] = r.css(a, b[g], !1, d);
                        return f
                    }
                    return void 0 !== c ? r.style(a, b, c) : r.css(a, b)
                }, a, b, arguments.length > 1)
            }
        });

        function _a(a, b, c, d, e) {
            return new _a.prototype.init(a, b, c, d, e)
        }

        r.Tween = _a, _a.prototype = {
            constructor: _a, init: function (a, b, c, d, e, f) {
                this.elem = a, this.prop = c, this.easing = e || r.easing._default, this.options = b, this.start = this.now = this.cur(), this.end = d, this.unit = f || (r.cssNumber[c] ? "" : "px")
            }, cur: function () {
                var a = _a.propHooks[this.prop];
                return a && a.get ? a.get(this) : _a.propHooks._default.get(this)
            }, run: function (a) {
                var b, c = _a.propHooks[this.prop];
                return this.options.duration ? this.pos = b = r.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : this.pos = b = a, this.now = (this.end - this.start) * b + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), c && c.set ? c.set(this) : _a.propHooks._default.set(this), this
            }
        }, _a.prototype.init.prototype = _a.prototype, _a.propHooks = {
            _default: {
                get: function (a) {
                    var b;
                    return 1 !== a.elem.nodeType || null != a.elem[a.prop] && null == a.elem.style[a.prop] ? a.elem[a.prop] : (b = r.css(a.elem, a.prop, ""), b && "auto" !== b ? b : 0)
                }, set: function (a) {
                    r.fx.step[a.prop] ? r.fx.step[a.prop](a) : 1 !== a.elem.nodeType || null == a.elem.style[r.cssProps[a.prop]] && !r.cssHooks[a.prop] ? a.elem[a.prop] = a.now : r.style(a.elem, a.prop, a.now + a.unit)
                }
            }
        }, _a.propHooks.scrollTop = _a.propHooks.scrollLeft = {
            set: function (a) {
                a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
            }
        }, r.easing = {
            linear: function (a) {
                return a
            }, swing: function (a) {
                return .5 - Math.cos(a * Math.PI) / 2
            }, _default: "swing"
        }, r.fx = _a.prototype.init, r.fx.step = {};
        var ab, bb, cb = /^(?:toggle|show|hide)$/, db = /queueHooks$/;

        function eb() {
            bb && (d.hidden === !1 && a.requestAnimationFrame ? a.requestAnimationFrame(eb) : a.setTimeout(eb, r.fx.interval), r.fx.tick())
        }

        function fb() {
            return a.setTimeout(function () {
                ab = void 0
            }), ab = r.now()
        }

        function gb(a, b) {
            var c, d = 0, e = {height: a};
            for (b = b ? 1 : 0; d < 4; d += 2 - b) c = ca[d], e["margin" + c] = e["padding" + c] = a;
            return b && (e.opacity = e.width = a), e
        }

        function hb(a, b, c) {
            for (var d, e = (kb.tweeners[b] || []).concat(kb.tweeners["*"]), f = 0, g = e.length; f < g; f++) if (d = e[f].call(c, b, a)) return d
        }

        function ib(a, b, c) {
            var d, e, f, g, h, i, j, k, l = "width" in b || "height" in b, m = this, n = {}, o = a.style,
                p = a.nodeType && da(a), q = W.get(a, "fxshow");
            c.queue || (g = r._queueHooks(a, "fx"), null == g.unqueued && (g.unqueued = 0, h = g.empty.fire, g.empty.fire = function () {
                g.unqueued || h()
            }), g.unqueued++, m.always(function () {
                m.always(function () {
                    g.unqueued--, r.queue(a, "fx").length || g.empty.fire()
                })
            }));
            for (d in b) if (e = b[d], cb.test(e)) {
                if (delete b[d], f = f || "toggle" === e, e === (p ? "hide" : "show")) {
                    if ("show" !== e || !q || void 0 === q[d]) continue;
                    p = !0
                }
                n[d] = q && q[d] || r.style(a, d)
            }
            if (i = !r.isEmptyObject(b), i || !r.isEmptyObject(n)) {
                l && 1 === a.nodeType && (c.overflow = [o.overflow, o.overflowX, o.overflowY], j = q && q.display, null == j && (j = W.get(a, "display")), k = r.css(a, "display"), "none" === k && (j ? k = j : (ia([a], !0), j = a.style.display || j, k = r.css(a, "display"), ia([a]))), ("inline" === k || "inline-block" === k && null != j) && "none" === r.css(a, "float") && (i || (m.done(function () {
                    o.display = j
                }), null == j && (k = o.display, j = "none" === k ? "" : k)), o.display = "inline-block")), c.overflow && (o.overflow = "hidden", m.always(function () {
                    o.overflow = c.overflow[0], o.overflowX = c.overflow[1], o.overflowY = c.overflow[2]
                })), i = !1;
                for (d in n) i || (q ? "hidden" in q && (p = q.hidden) : q = W.access(a, "fxshow", {display: j}), f && (q.hidden = !p), p && ia([a], !0), m.done(function () {
                    p || ia([a]), W.remove(a, "fxshow");
                    for (d in n) r.style(a, d, n[d])
                })), i = hb(p ? q[d] : 0, d, m), d in q || (q[d] = i.start, p && (i.end = i.start, i.start = 0))
            }
        }

        function jb(a, b) {
            var c, d, e, f, g;
            for (c in a) if (d = r.camelCase(c), e = b[d], f = a[c], Array.isArray(f) && (e = f[1], f = a[c] = f[0]), c !== d && (a[d] = f, delete a[c]), g = r.cssHooks[d], g && "expand" in g) {
                f = g.expand(f), delete a[d];
                for (c in f) c in a || (a[c] = f[c], b[c] = e)
            } else b[d] = e
        }

        function kb(a, b, c) {
            var d, e, f = 0, g = kb.prefilters.length, h = r.Deferred().always(function () {
                delete i.elem
            }), i = function () {
                if (e) return !1;
                for (var b = ab || fb(), c = Math.max(0, j.startTime + j.duration - b), d = c / j.duration || 0, f = 1 - d, g = 0, i = j.tweens.length; g < i; g++) j.tweens[g].run(f);
                return h.notifyWith(a, [j, f, c]), f < 1 && i ? c : (i || h.notifyWith(a, [j, 1, 0]), h.resolveWith(a, [j]), !1)
            }, j = h.promise({
                elem: a,
                props: r.extend({}, b),
                opts: r.extend(!0, {specialEasing: {}, easing: r.easing._default}, c),
                originalProperties: b,
                originalOptions: c,
                startTime: ab || fb(),
                duration: c.duration,
                tweens: [],
                createTween: function (b, c) {
                    var d = r.Tween(a, j.opts, b, c, j.opts.specialEasing[b] || j.opts.easing);
                    return j.tweens.push(d), d
                },
                stop: function (b) {
                    var c = 0, d = b ? j.tweens.length : 0;
                    if (e) return this;
                    for (e = !0; c < d; c++) j.tweens[c].run(1);
                    return b ? (h.notifyWith(a, [j, 1, 0]), h.resolveWith(a, [j, b])) : h.rejectWith(a, [j, b]), this
                }
            }), k = j.props;
            for (jb(k, j.opts.specialEasing); f < g; f++) if (d = kb.prefilters[f].call(j, a, k, j.opts)) return r.isFunction(d.stop) && (r._queueHooks(j.elem, j.opts.queue).stop = r.proxy(d.stop, d)), d;
            return r.map(k, hb, j), r.isFunction(j.opts.start) && j.opts.start.call(a, j), j.progress(j.opts.progress).done(j.opts.done, j.opts.complete).fail(j.opts.fail).always(j.opts.always), r.fx.timer(r.extend(i, {
                elem: a,
                anim: j,
                queue: j.opts.queue
            })), j
        }

        r.Animation = r.extend(kb, {
            tweeners: {
                "*": [function (a, b) {
                    var c = this.createTween(a, b);
                    return fa(c.elem, a, ba.exec(b), c), c
                }]
            }, tweener: function (a, b) {
                r.isFunction(a) ? (b = a, a = ["*"]) : a = a.match(L);
                for (var c, d = 0, e = a.length; d < e; d++) c = a[d], kb.tweeners[c] = kb.tweeners[c] || [], kb.tweeners[c].unshift(b)
            }, prefilters: [ib], prefilter: function (a, b) {
                b ? kb.prefilters.unshift(a) : kb.prefilters.push(a)
            }
        }), r.speed = function (a, b, c) {
            var d = a && "object" == typeof a ? r.extend({}, a) : {
                complete: c || !c && b || r.isFunction(a) && a,
                duration: a,
                easing: c && b || b && !r.isFunction(b) && b
            };
            return r.fx.off ? d.duration = 0 : "number" != typeof d.duration && (d.duration in r.fx.speeds ? d.duration = r.fx.speeds[d.duration] : d.duration = r.fx.speeds._default), null != d.queue && d.queue !== !0 || (d.queue = "fx"), d.old = d.complete, d.complete = function () {
                r.isFunction(d.old) && d.old.call(this), d.queue && r.dequeue(this, d.queue)
            }, d
        }, r.fn.extend({
            fadeTo: function (a, b, c, d) {
                return this.filter(da).css("opacity", 0).show().end().animate({opacity: b}, a, c, d)
            }, animate: function (a, b, c, d) {
                var e = r.isEmptyObject(a), f = r.speed(b, c, d), g = function () {
                    var b = kb(this, r.extend({}, a), f);
                    (e || W.get(this, "finish")) && b.stop(!0)
                };
                return g.finish = g, e || f.queue === !1 ? this.each(g) : this.queue(f.queue, g)
            }, stop: function (a, b, c) {
                var d = function (a) {
                    var b = a.stop;
                    delete a.stop, b(c)
                };
                return "string" != typeof a && (c = b, b = a, a = void 0), b && a !== !1 && this.queue(a || "fx", []), this.each(function () {
                    var b = !0, e = null != a && a + "queueHooks", f = r.timers, g = W.get(this);
                    if (e) g[e] && g[e].stop && d(g[e]); else for (e in g) g[e] && g[e].stop && db.test(e) && d(g[e]);
                    for (e = f.length; e--;) f[e].elem !== this || null != a && f[e].queue !== a || (f[e].anim.stop(c), b = !1, f.splice(e, 1));
                    !b && c || r.dequeue(this, a)
                })
            }, finish: function (a) {
                return a !== !1 && (a = a || "fx"), this.each(function () {
                    var b, c = W.get(this), d = c[a + "queue"], e = c[a + "queueHooks"], f = r.timers,
                        g = d ? d.length : 0;
                    for (c.finish = !0, r.queue(this, a, []), e && e.stop && e.stop.call(this, !0), b = f.length; b--;) f[b].elem === this && f[b].queue === a && (f[b].anim.stop(!0), f.splice(b, 1));
                    for (b = 0; b < g; b++) d[b] && d[b].finish && d[b].finish.call(this);
                    delete c.finish
                })
            }
        }), r.each(["toggle", "show", "hide"], function (a, b) {
            var c = r.fn[b];
            r.fn[b] = function (a, d, e) {
                return null == a || "boolean" == typeof a ? c.apply(this, arguments) : this.animate(gb(b, !0), a, d, e)
            }
        }), r.each({
            slideDown: gb("show"),
            slideUp: gb("hide"),
            slideToggle: gb("toggle"),
            fadeIn: {opacity: "show"},
            fadeOut: {opacity: "hide"},
            fadeToggle: {opacity: "toggle"}
        }, function (a, b) {
            r.fn[a] = function (a, c, d) {
                return this.animate(b, a, c, d)
            }
        }), r.timers = [], r.fx.tick = function () {
            var a, b = 0, c = r.timers;
            for (ab = r.now(); b < c.length; b++) a = c[b], a() || c[b] !== a || c.splice(b--, 1);
            c.length || r.fx.stop(), ab = void 0
        }, r.fx.timer = function (a) {
            r.timers.push(a), r.fx.start()
        }, r.fx.interval = 13, r.fx.start = function () {
            bb || (bb = !0, eb())
        }, r.fx.stop = function () {
            bb = null
        }, r.fx.speeds = {slow: 600, fast: 200, _default: 400}, r.fn.delay = function (b, c) {
            return b = r.fx ? r.fx.speeds[b] || b : b, c = c || "fx", this.queue(c, function (c, d) {
                var e = a.setTimeout(c, b);
                d.stop = function () {
                    a.clearTimeout(e)
                }
            })
        }, function () {
            var a = d.createElement("input"), b = d.createElement("select"),
                c = b.appendChild(d.createElement("option"));
            a.type = "checkbox", o.checkOn = "" !== a.value, o.optSelected = c.selected, a = d.createElement("input"), a.value = "t", a.type = "radio", o.radioValue = "t" === a.value
        }();
        var lb, mb = r.expr.attrHandle;
        r.fn.extend({
            attr: function (a, b) {
                return T(this, r.attr, a, b, arguments.length > 1)
            }, removeAttr: function (a) {
                return this.each(function () {
                    r.removeAttr(this, a)
                })
            }
        }), r.extend({
            attr: function (a, b, c) {
                var d, e, f = a.nodeType;
                if (3 !== f && 8 !== f && 2 !== f) return "undefined" == typeof a.getAttribute ? r.prop(a, b, c) : (1 === f && r.isXMLDoc(a) || (e = r.attrHooks[b.toLowerCase()] || (r.expr.match.bool.test(b) ? lb : void 0)), void 0 !== c ? null === c ? void r.removeAttr(a, b) : e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : (a.setAttribute(b, c + ""), c) : e && "get" in e && null !== (d = e.get(a, b)) ? d : (d = r.find.attr(a, b),
                    null == d ? void 0 : d))
            }, attrHooks: {
                type: {
                    set: function (a, b) {
                        if (!o.radioValue && "radio" === b && B(a, "input")) {
                            var c = a.value;
                            return a.setAttribute("type", b), c && (a.value = c), b
                        }
                    }
                }
            }, removeAttr: function (a, b) {
                var c, d = 0, e = b && b.match(L);
                if (e && 1 === a.nodeType) while (c = e[d++]) a.removeAttribute(c)
            }
        }), lb = {
            set: function (a, b, c) {
                return b === !1 ? r.removeAttr(a, c) : a.setAttribute(c, c), c
            }
        }, r.each(r.expr.match.bool.source.match(/\w+/g), function (a, b) {
            var c = mb[b] || r.find.attr;
            mb[b] = function (a, b, d) {
                var e, f, g = b.toLowerCase();
                return d || (f = mb[g], mb[g] = e, e = null != c(a, b, d) ? g : null, mb[g] = f), e
            }
        });
        var nb = /^(?:input|select|textarea|button)$/i, ob = /^(?:a|area)$/i;
        r.fn.extend({
            prop: function (a, b) {
                return T(this, r.prop, a, b, arguments.length > 1)
            }, removeProp: function (a) {
                return this.each(function () {
                    delete this[r.propFix[a] || a]
                })
            }
        }), r.extend({
            prop: function (a, b, c) {
                var d, e, f = a.nodeType;
                if (3 !== f && 8 !== f && 2 !== f) return 1 === f && r.isXMLDoc(a) || (b = r.propFix[b] || b, e = r.propHooks[b]), void 0 !== c ? e && "set" in e && void 0 !== (d = e.set(a, c, b)) ? d : a[b] = c : e && "get" in e && null !== (d = e.get(a, b)) ? d : a[b]
            }, propHooks: {
                tabIndex: {
                    get: function (a) {
                        var b = r.find.attr(a, "tabindex");
                        return b ? parseInt(b, 10) : nb.test(a.nodeName) || ob.test(a.nodeName) && a.href ? 0 : -1
                    }
                }
            }, propFix: {"for": "htmlFor", "class": "className"}
        }), o.optSelected || (r.propHooks.selected = {
            get: function (a) {
                var b = a.parentNode;
                return b && b.parentNode && b.parentNode.selectedIndex, null
            }, set: function (a) {
                var b = a.parentNode;
                b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex)
            }
        }), r.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
            r.propFix[this.toLowerCase()] = this
        });

        function pb(a) {
            var b = a.match(L) || [];
            return b.join(" ")
        }

        function qb(a) {
            return a.getAttribute && a.getAttribute("class") || ""
        }

        r.fn.extend({
            addClass: function (a) {
                var b, c, d, e, f, g, h, i = 0;
                if (r.isFunction(a)) return this.each(function (b) {
                    r(this).addClass(a.call(this, b, qb(this)))
                });
                if ("string" == typeof a && a) {
                    b = a.match(L) || [];
                    while (c = this[i++]) if (e = qb(c), d = 1 === c.nodeType && " " + pb(e) + " ") {
                        g = 0;
                        while (f = b[g++]) d.indexOf(" " + f + " ") < 0 && (d += f + " ");
                        h = pb(d), e !== h && c.setAttribute("class", h)
                    }
                }
                return this
            }, removeClass: function (a) {
                var b, c, d, e, f, g, h, i = 0;
                if (r.isFunction(a)) return this.each(function (b) {
                    r(this).removeClass(a.call(this, b, qb(this)))
                });
                if (!arguments.length) return this.attr("class", "");
                if ("string" == typeof a && a) {
                    b = a.match(L) || [];
                    while (c = this[i++]) if (e = qb(c), d = 1 === c.nodeType && " " + pb(e) + " ") {
                        g = 0;
                        while (f = b[g++]) while (d.indexOf(" " + f + " ") > -1) d = d.replace(" " + f + " ", " ");
                        h = pb(d), e !== h && c.setAttribute("class", h)
                    }
                }
                return this
            }, toggleClass: function (a, b) {
                var c = typeof a;
                return "boolean" == typeof b && "string" === c ? b ? this.addClass(a) : this.removeClass(a) : r.isFunction(a) ? this.each(function (c) {
                    r(this).toggleClass(a.call(this, c, qb(this), b), b)
                }) : this.each(function () {
                    var b, d, e, f;
                    if ("string" === c) {
                        d = 0, e = r(this), f = a.match(L) || [];
                        while (b = f[d++]) e.hasClass(b) ? e.removeClass(b) : e.addClass(b)
                    } else void 0 !== a && "boolean" !== c || (b = qb(this), b && W.set(this, "__className__", b), this.setAttribute && this.setAttribute("class", b || a === !1 ? "" : W.get(this, "__className__") || ""))
                })
            }, hasClass: function (a) {
                var b, c, d = 0;
                b = " " + a + " ";
                while (c = this[d++]) if (1 === c.nodeType && (" " + pb(qb(c)) + " ").indexOf(b) > -1) return !0;
                return !1
            }
        });
        var rb = /\r/g;
        r.fn.extend({
            val: function (a) {
                var b, c, d, e = this[0];
                {
                    if (arguments.length) return d = r.isFunction(a), this.each(function (c) {
                        var e;
                        1 === this.nodeType && (e = d ? a.call(this, c, r(this).val()) : a, null == e ? e = "" : "number" == typeof e ? e += "" : Array.isArray(e) && (e = r.map(e, function (a) {
                            return null == a ? "" : a + ""
                        })), b = r.valHooks[this.type] || r.valHooks[this.nodeName.toLowerCase()], b && "set" in b && void 0 !== b.set(this, e, "value") || (this.value = e))
                    });
                    if (e) return b = r.valHooks[e.type] || r.valHooks[e.nodeName.toLowerCase()], b && "get" in b && void 0 !== (c = b.get(e, "value")) ? c : (c = e.value, "string" == typeof c ? c.replace(rb, "") : null == c ? "" : c)
                }
            }
        }), r.extend({
            valHooks: {
                option: {
                    get: function (a) {
                        var b = r.find.attr(a, "value");
                        return null != b ? b : pb(r.text(a))
                    }
                }, select: {
                    get: function (a) {
                        var b, c, d, e = a.options, f = a.selectedIndex, g = "select-one" === a.type, h = g ? null : [],
                            i = g ? f + 1 : e.length;
                        for (d = f < 0 ? i : g ? f : 0; d < i; d++) if (c = e[d], (c.selected || d === f) && !c.disabled && (!c.parentNode.disabled || !B(c.parentNode, "optgroup"))) {
                            if (b = r(c).val(), g) return b;
                            h.push(b)
                        }
                        return h
                    }, set: function (a, b) {
                        var c, d, e = a.options, f = r.makeArray(b), g = e.length;
                        while (g--) d = e[g], (d.selected = r.inArray(r.valHooks.option.get(d), f) > -1) && (c = !0);
                        return c || (a.selectedIndex = -1), f
                    }
                }
            }
        }), r.each(["radio", "checkbox"], function () {
            r.valHooks[this] = {
                set: function (a, b) {
                    if (Array.isArray(b)) return a.checked = r.inArray(r(a).val(), b) > -1
                }
            }, o.checkOn || (r.valHooks[this].get = function (a) {
                return null === a.getAttribute("value") ? "on" : a.value
            })
        });
        var sb = /^(?:focusinfocus|focusoutblur)$/;
        r.extend(r.event, {
            trigger: function (b, c, e, f) {
                var g, h, i, j, k, m, n, o = [e || d], p = l.call(b, "type") ? b.type : b,
                    q = l.call(b, "namespace") ? b.namespace.split(".") : [];
                if (h = i = e = e || d, 3 !== e.nodeType && 8 !== e.nodeType && !sb.test(p + r.event.triggered) && (p.indexOf(".") > -1 && (q = p.split("."), p = q.shift(), q.sort()), k = p.indexOf(":") < 0 && "on" + p, b = b[r.expando] ? b : new r.Event(p, "object" == typeof b && b), b.isTrigger = f ? 2 : 3, b.namespace = q.join("."), b.rnamespace = b.namespace ? new RegExp("(^|\\.)" + q.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, b.result = void 0, b.target || (b.target = e), c = null == c ? [b] : r.makeArray(c, [b]), n = r.event.special[p] || {}, f || !n.trigger || n.trigger.apply(e, c) !== !1)) {
                    if (!f && !n.noBubble && !r.isWindow(e)) {
                        for (j = n.delegateType || p, sb.test(j + p) || (h = h.parentNode); h; h = h.parentNode) o.push(h), i = h;
                        i === (e.ownerDocument || d) && o.push(i.defaultView || i.parentWindow || a)
                    }
                    g = 0;
                    while ((h = o[g++]) && !b.isPropagationStopped()) b.type = g > 1 ? j : n.bindType || p, m = (W.get(h, "events") || {})[b.type] && W.get(h, "handle"), m && m.apply(h, c), m = k && h[k], m && m.apply && U(h) && (b.result = m.apply(h, c), b.result === !1 && b.preventDefault());
                    return b.type = p, f || b.isDefaultPrevented() || n._default && n._default.apply(o.pop(), c) !== !1 || !U(e) || k && r.isFunction(e[p]) && !r.isWindow(e) && (i = e[k], i && (e[k] = null), r.event.triggered = p, e[p](), r.event.triggered = void 0, i && (e[k] = i)), b.result
                }
            }, simulate: function (a, b, c) {
                var d = r.extend(new r.Event, c, {type: a, isSimulated: !0});
                r.event.trigger(d, null, b)
            }
        }), r.fn.extend({
            trigger: function (a, b) {
                return this.each(function () {
                    r.event.trigger(a, b, this)
                })
            }, triggerHandler: function (a, b) {
                var c = this[0];
                if (c) return r.event.trigger(a, b, c, !0)
            }
        }), r.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (a, b) {
            r.fn[b] = function (a, c) {
                return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
            }
        }), r.fn.extend({
            hover: function (a, b) {
                return this.mouseenter(a).mouseleave(b || a)
            }
        }), o.focusin = "onfocusin" in a, o.focusin || r.each({focus: "focusin", blur: "focusout"}, function (a, b) {
            var c = function (a) {
                r.event.simulate(b, a.target, r.event.fix(a))
            };
            r.event.special[b] = {
                setup: function () {
                    var d = this.ownerDocument || this, e = W.access(d, b);
                    e || d.addEventListener(a, c, !0), W.access(d, b, (e || 0) + 1)
                }, teardown: function () {
                    var d = this.ownerDocument || this, e = W.access(d, b) - 1;
                    e ? W.access(d, b, e) : (d.removeEventListener(a, c, !0), W.remove(d, b))
                }
            }
        });
        var tb = a.location, ub = r.now(), vb = /\?/;
        r.parseXML = function (b) {
            var c;
            if (!b || "string" != typeof b) return null;
            try {
                c = (new a.DOMParser).parseFromString(b, "text/xml")
            } catch (d) {
                c = void 0
            }
            return c && !c.getElementsByTagName("parsererror").length || r.error("Invalid XML: " + b), c
        };
        var wb = /\[\]$/, xb = /\r?\n/g, yb = /^(?:submit|button|image|reset|file)$/i,
            zb = /^(?:input|select|textarea|keygen)/i;

        function Ab(a, b, c, d) {
            var e;
            if (Array.isArray(b)) r.each(b, function (b, e) {
                c || wb.test(a) ? d(a, e) : Ab(a + "[" + ("object" == typeof e && null != e ? b : "") + "]", e, c, d)
            }); else if (c || "object" !== r.type(b)) d(a, b); else for (e in b) Ab(a + "[" + e + "]", b[e], c, d)
        }

        r.param = function (a, b) {
            var c, d = [], e = function (a, b) {
                var c = r.isFunction(b) ? b() : b;
                d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(null == c ? "" : c)
            };
            if (Array.isArray(a) || a.jquery && !r.isPlainObject(a)) r.each(a, function () {
                e(this.name, this.value)
            }); else for (c in a) Ab(c, a[c], b, e);
            return d.join("&")
        }, r.fn.extend({
            serialize: function () {
                return r.param(this.serializeArray())
            }, serializeArray: function () {
                return this.map(function () {
                    var a = r.prop(this, "elements");
                    return a ? r.makeArray(a) : this
                }).filter(function () {
                    var a = this.type;
                    return this.name && !r(this).is(":disabled") && zb.test(this.nodeName) && !yb.test(a) && (this.checked || !ja.test(a))
                }).map(function (a, b) {
                    var c = r(this).val();
                    return null == c ? null : Array.isArray(c) ? r.map(c, function (a) {
                        return {name: b.name, value: a.replace(xb, "\r\n")}
                    }) : {name: b.name, value: c.replace(xb, "\r\n")}
                }).get()
            }
        });
        var Bb = /%20/g, Cb = /#.*$/, Db = /([?&])_=[^&]*/, Eb = /^(.*?):[ \t]*([^\r\n]*)$/gm,
            Fb = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/, Gb = /^(?:GET|HEAD)$/, Hb = /^\/\//,
            Ib = {}, Jb = {}, Kb = "*/".concat("*"), Lb = d.createElement("a");
        Lb.href = tb.href;

        function Mb(a) {
            return function (b, c) {
                "string" != typeof b && (c = b, b = "*");
                var d, e = 0, f = b.toLowerCase().match(L) || [];
                if (r.isFunction(c)) while (d = f[e++]) "+" === d[0] ? (d = d.slice(1) || "*", (a[d] = a[d] || []).unshift(c)) : (a[d] = a[d] || []).push(c)
            }
        }

        function Nb(a, b, c, d) {
            var e = {}, f = a === Jb;

            function g(h) {
                var i;
                return e[h] = !0, r.each(a[h] || [], function (a, h) {
                    var j = h(b, c, d);
                    return "string" != typeof j || f || e[j] ? f ? !(i = j) : void 0 : (b.dataTypes.unshift(j), g(j), !1)
                }), i
            }

            return g(b.dataTypes[0]) || !e["*"] && g("*")
        }

        function Ob(a, b) {
            var c, d, e = r.ajaxSettings.flatOptions || {};
            for (c in b) void 0 !== b[c] && ((e[c] ? a : d || (d = {}))[c] = b[c]);
            return d && r.extend(!0, a, d), a
        }

        function Pb(a, b, c) {
            var d, e, f, g, h = a.contents, i = a.dataTypes;
            while ("*" === i[0]) i.shift(), void 0 === d && (d = a.mimeType || b.getResponseHeader("Content-Type"));
            if (d) for (e in h) if (h[e] && h[e].test(d)) {
                i.unshift(e);
                break
            }
            if (i[0] in c) f = i[0]; else {
                for (e in c) {
                    if (!i[0] || a.converters[e + " " + i[0]]) {
                        f = e;
                        break
                    }
                    g || (g = e)
                }
                f = f || g
            }
            if (f) return f !== i[0] && i.unshift(f), c[f]
        }

        function Qb(a, b, c, d) {
            var e, f, g, h, i, j = {}, k = a.dataTypes.slice();
            if (k[1]) for (g in a.converters) j[g.toLowerCase()] = a.converters[g];
            f = k.shift();
            while (f) if (a.responseFields[f] && (c[a.responseFields[f]] = b), !i && d && a.dataFilter && (b = a.dataFilter(b, a.dataType)), i = f, f = k.shift()) if ("*" === f) f = i; else if ("*" !== i && i !== f) {
                if (g = j[i + " " + f] || j["* " + f], !g) for (e in j) if (h = e.split(" "), h[1] === f && (g = j[i + " " + h[0]] || j["* " + h[0]])) {
                    g === !0 ? g = j[e] : j[e] !== !0 && (f = h[0], k.unshift(h[1]));
                    break
                }
                if (g !== !0) if (g && a["throws"]) b = g(b); else try {
                    b = g(b)
                } catch (l) {
                    return {state: "parsererror", error: g ? l : "No conversion from " + i + " to " + f}
                }
            }
            return {state: "success", data: b}
        }

        r.extend({
            active: 0,
            lastModified: {},
            etag: {},
            ajaxSettings: {
                url: tb.href,
                type: "GET",
                isLocal: Fb.test(tb.protocol),
                global: !0,
                processData: !0,
                async: !0,
                contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                accepts: {
                    "*": Kb,
                    text: "text/plain",
                    html: "text/html",
                    xml: "application/xml, text/xml",
                    json: "application/json, text/javascript"
                },
                contents: {xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/},
                responseFields: {xml: "responseXML", text: "responseText", json: "responseJSON"},
                converters: {"* text": String, "text html": !0, "text json": JSON.parse, "text xml": r.parseXML},
                flatOptions: {url: !0, context: !0}
            },
            ajaxSetup: function (a, b) {
                return b ? Ob(Ob(a, r.ajaxSettings), b) : Ob(r.ajaxSettings, a)
            },
            ajaxPrefilter: Mb(Ib),
            ajaxTransport: Mb(Jb),
            ajax: function (b, c) {
                "object" == typeof b && (c = b, b = void 0), c = c || {};
                var e, f, g, h, i, j, k, l, m, n, o = r.ajaxSetup({}, c), p = o.context || o,
                    q = o.context && (p.nodeType || p.jquery) ? r(p) : r.event, s = r.Deferred(),
                    t = r.Callbacks("once memory"), u = o.statusCode || {}, v = {}, w = {}, x = "canceled", y = {
                        readyState: 0, getResponseHeader: function (a) {
                            var b;
                            if (k) {
                                if (!h) {
                                    h = {};
                                    while (b = Eb.exec(g)) h[b[1].toLowerCase()] = b[2]
                                }
                                b = h[a.toLowerCase()]
                            }
                            return null == b ? null : b
                        }, getAllResponseHeaders: function () {
                            return k ? g : null
                        }, setRequestHeader: function (a, b) {
                            return null == k && (a = w[a.toLowerCase()] = w[a.toLowerCase()] || a, v[a] = b), this
                        }, overrideMimeType: function (a) {
                            return null == k && (o.mimeType = a), this
                        }, statusCode: function (a) {
                            var b;
                            if (a) if (k) y.always(a[y.status]); else for (b in a) u[b] = [u[b], a[b]];
                            return this
                        }, abort: function (a) {
                            var b = a || x;
                            return e && e.abort(b), A(0, b), this
                        }
                    };
                if (s.promise(y), o.url = ((b || o.url || tb.href) + "").replace(Hb, tb.protocol + "//"), o.type = c.method || c.type || o.method || o.type, o.dataTypes = (o.dataType || "*").toLowerCase().match(L) || [""], null == o.crossDomain) {
                    j = d.createElement("a");
                    try {
                        j.href = o.url, j.href = j.href, o.crossDomain = Lb.protocol + "//" + Lb.host != j.protocol + "//" + j.host
                    } catch (z) {
                        o.crossDomain = !0
                    }
                }
                if (o.data && o.processData && "string" != typeof o.data && (o.data = r.param(o.data, o.traditional)), Nb(Ib, o, c, y), k) return y;
                l = r.event && o.global, l && 0 === r.active++ && r.event.trigger("ajaxStart"), o.type = o.type.toUpperCase(), o.hasContent = !Gb.test(o.type), f = o.url.replace(Cb, ""), o.hasContent ? o.data && o.processData && 0 === (o.contentType || "").indexOf("application/x-www-form-urlencoded") && (o.data = o.data.replace(Bb, "+")) : (n = o.url.slice(f.length), o.data && (f += (vb.test(f) ? "&" : "?") + o.data, delete o.data), o.cache === !1 && (f = f.replace(Db, "$1"), n = (vb.test(f) ? "&" : "?") + "_=" + ub++ + n), o.url = f + n), o.ifModified && (r.lastModified[f] && y.setRequestHeader("If-Modified-Since", r.lastModified[f]), r.etag[f] && y.setRequestHeader("If-None-Match", r.etag[f])), (o.data && o.hasContent && o.contentType !== !1 || c.contentType) && y.setRequestHeader("Content-Type", o.contentType), y.setRequestHeader("Accept", o.dataTypes[0] && o.accepts[o.dataTypes[0]] ? o.accepts[o.dataTypes[0]] + ("*" !== o.dataTypes[0] ? ", " + Kb + "; q=0.01" : "") : o.accepts["*"]);
                for (m in o.headers) y.setRequestHeader(m, o.headers[m]);
                if (o.beforeSend && (o.beforeSend.call(p, y, o) === !1 || k)) return y.abort();
                if (x = "abort", t.add(o.complete), y.done(o.success), y.fail(o.error), e = Nb(Jb, o, c, y)) {
                    if (y.readyState = 1, l && q.trigger("ajaxSend", [y, o]), k) return y;
                    o.async && o.timeout > 0 && (i = a.setTimeout(function () {
                        y.abort("timeout")
                    }, o.timeout));
                    try {
                        k = !1, e.send(v, A)
                    } catch (z) {
                        if (k) throw z;
                        A(-1, z)
                    }
                } else A(-1, "No Transport");

                function A(b, c, d, h) {
                    var j, m, n, v, w, x = c;
                    k || (k = !0, i && a.clearTimeout(i), e = void 0, g = h || "", y.readyState = b > 0 ? 4 : 0, j = b >= 200 && b < 300 || 304 === b, d && (v = Pb(o, y, d)), v = Qb(o, v, y, j), j ? (o.ifModified && (w = y.getResponseHeader("Last-Modified"), w && (r.lastModified[f] = w), w = y.getResponseHeader("etag"), w && (r.etag[f] = w)), 204 === b || "HEAD" === o.type ? x = "nocontent" : 304 === b ? x = "notmodified" : (x = v.state, m = v.data, n = v.error, j = !n)) : (n = x, !b && x || (x = "error", b < 0 && (b = 0))), y.status = b, y.statusText = (c || x) + "", j ? s.resolveWith(p, [m, x, y]) : s.rejectWith(p, [y, x, n]), y.statusCode(u), u = void 0, l && q.trigger(j ? "ajaxSuccess" : "ajaxError", [y, o, j ? m : n]), t.fireWith(p, [y, x]), l && (q.trigger("ajaxComplete", [y, o]), --r.active || r.event.trigger("ajaxStop")))
                }

                return y
            },
            getJSON: function (a, b, c) {
                return r.get(a, b, c, "json")
            },
            getScript: function (a, b) {
                return r.get(a, void 0, b, "script")
            }
        }), r.each(["get", "post"], function (a, b) {
            r[b] = function (a, c, d, e) {
                return r.isFunction(c) && (e = e || d, d = c, c = void 0), r.ajax(r.extend({
                    url: a,
                    type: b,
                    dataType: e,
                    data: c,
                    success: d
                }, r.isPlainObject(a) && a))
            }
        }), r._evalUrl = function (a) {
            return r.ajax({url: a, type: "GET", dataType: "script", cache: !0, async: !1, global: !1, "throws": !0})
        }, r.fn.extend({
            wrapAll: function (a) {
                var b;
                return this[0] && (r.isFunction(a) && (a = a.call(this[0])), b = r(a, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
                    var a = this;
                    while (a.firstElementChild) a = a.firstElementChild;
                    return a
                }).append(this)), this
            }, wrapInner: function (a) {
                return r.isFunction(a) ? this.each(function (b) {
                    r(this).wrapInner(a.call(this, b))
                }) : this.each(function () {
                    var b = r(this), c = b.contents();
                    c.length ? c.wrapAll(a) : b.append(a)
                })
            }, wrap: function (a) {
                var b = r.isFunction(a);
                return this.each(function (c) {
                    r(this).wrapAll(b ? a.call(this, c) : a)
                })
            }, unwrap: function (a) {
                return this.parent(a).not("body").each(function () {
                    r(this).replaceWith(this.childNodes)
                }), this
            }
        }), r.expr.pseudos.hidden = function (a) {
            return !r.expr.pseudos.visible(a)
        }, r.expr.pseudos.visible = function (a) {
            return !!(a.offsetWidth || a.offsetHeight || a.getClientRects().length)
        }, r.ajaxSettings.xhr = function () {
            try {
                return new a.XMLHttpRequest
            } catch (b) {
            }
        };
        var Rb = {0: 200, 1223: 204}, Sb = r.ajaxSettings.xhr();
        o.cors = !!Sb && "withCredentials" in Sb, o.ajax = Sb = !!Sb, r.ajaxTransport(function (b) {
            var c, d;
            if (o.cors || Sb && !b.crossDomain) return {
                send: function (e, f) {
                    var g, h = b.xhr();
                    if (h.open(b.type, b.url, b.async, b.username, b.password), b.xhrFields) for (g in b.xhrFields) h[g] = b.xhrFields[g];
                    b.mimeType && h.overrideMimeType && h.overrideMimeType(b.mimeType), b.crossDomain || e["X-Requested-With"] || (e["X-Requested-With"] = "XMLHttpRequest");
                    for (g in e) h.setRequestHeader(g, e[g]);
                    c = function (a) {
                        return function () {
                            c && (c = d = h.onload = h.onerror = h.onabort = h.onreadystatechange = null, "abort" === a ? h.abort() : "error" === a ? "number" != typeof h.status ? f(0, "error") : f(h.status, h.statusText) : f(Rb[h.status] || h.status, h.statusText, "text" !== (h.responseType || "text") || "string" != typeof h.responseText ? {binary: h.response} : {text: h.responseText}, h.getAllResponseHeaders()))
                        }
                    }, h.onload = c(), d = h.onerror = c("error"), void 0 !== h.onabort ? h.onabort = d : h.onreadystatechange = function () {
                        4 === h.readyState && a.setTimeout(function () {
                            c && d()
                        })
                    }, c = c("abort");
                    try {
                        h.send(b.hasContent && b.data || null)
                    } catch (i) {
                        if (c) throw i
                    }
                }, abort: function () {
                    c && c()
                }
            }
        }), r.ajaxPrefilter(function (a) {
            a.crossDomain && (a.contents.script = !1)
        }), r.ajaxSetup({
            accepts: {script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},
            contents: {script: /\b(?:java|ecma)script\b/},
            converters: {
                "text script": function (a) {
                    return r.globalEval(a), a
                }
            }
        }), r.ajaxPrefilter("script", function (a) {
            void 0 === a.cache && (a.cache = !1), a.crossDomain && (a.type = "GET")
        }), r.ajaxTransport("script", function (a) {
            if (a.crossDomain) {
                var b, c;
                return {
                    send: function (e, f) {
                        b = r("<script>").prop({
                            charset: a.scriptCharset,
                            src: a.url
                        }).on("load error", c = function (a) {
                            b.remove(), c = null, a && f("error" === a.type ? 404 : 200, a.type)
                        }), d.head.appendChild(b[0])
                    }, abort: function () {
                        c && c()
                    }
                }
            }
        });
        var Tb = [], Ub = /(=)\?(?=&|$)|\?\?/;
        r.ajaxSetup({
            jsonp: "callback", jsonpCallback: function () {
                var a = Tb.pop() || r.expando + "_" + ub++;
                return this[a] = !0, a
            }
        }), r.ajaxPrefilter("json jsonp", function (b, c, d) {
            var e, f, g,
                h = b.jsonp !== !1 && (Ub.test(b.url) ? "url" : "string" == typeof b.data && 0 === (b.contentType || "").indexOf("application/x-www-form-urlencoded") && Ub.test(b.data) && "data");
            if (h || "jsonp" === b.dataTypes[0]) return e = b.jsonpCallback = r.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback, h ? b[h] = b[h].replace(Ub, "$1" + e) : b.jsonp !== !1 && (b.url += (vb.test(b.url) ? "&" : "?") + b.jsonp + "=" + e), b.converters["script json"] = function () {
                return g || r.error(e + " was not called"), g[0]
            }, b.dataTypes[0] = "json", f = a[e], a[e] = function () {
                g = arguments
            }, d.always(function () {
                void 0 === f ? r(a).removeProp(e) : a[e] = f, b[e] && (b.jsonpCallback = c.jsonpCallback, Tb.push(e)), g && r.isFunction(f) && f(g[0]), g = f = void 0
            }), "script"
        }), o.createHTMLDocument = function () {
            var a = d.implementation.createHTMLDocument("").body;
            return a.innerHTML = "<form></form><form></form>", 2 === a.childNodes.length
        }(), r.parseHTML = function (a, b, c) {
            if ("string" != typeof a) return [];
            "boolean" == typeof b && (c = b, b = !1);
            var e, f, g;
            return b || (o.createHTMLDocument ? (b = d.implementation.createHTMLDocument(""), e = b.createElement("base"), e.href = d.location.href, b.head.appendChild(e)) : b = d), f = C.exec(a), g = !c && [], f ? [b.createElement(f[1])] : (f = qa([a], b, g), g && g.length && r(g).remove(), r.merge([], f.childNodes))
        }, r.fn.load = function (a, b, c) {
            var d, e, f, g = this, h = a.indexOf(" ");
            return h > -1 && (d = pb(a.slice(h)), a = a.slice(0, h)), r.isFunction(b) ? (c = b, b = void 0) : b && "object" == typeof b && (e = "POST"), g.length > 0 && r.ajax({
                url: a,
                type: e || "GET",
                dataType: "html",
                data: b
            }).done(function (a) {
                f = arguments, g.html(d ? r("<div>").append(r.parseHTML(a)).find(d) : a)
            }).always(c && function (a, b) {
                g.each(function () {
                    c.apply(this, f || [a.responseText, b, a])
                })
            }), this
        }, r.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (a, b) {
            r.fn[b] = function (a) {
                return this.on(b, a)
            }
        }), r.expr.pseudos.animated = function (a) {
            return r.grep(r.timers, function (b) {
                return a === b.elem
            }).length
        }, r.offset = {
            setOffset: function (a, b, c) {
                var d, e, f, g, h, i, j, k = r.css(a, "position"), l = r(a), m = {};
                "static" === k && (a.style.position = "relative"), h = l.offset(), f = r.css(a, "top"), i = r.css(a, "left"), j = ("absolute" === k || "fixed" === k) && (f + i).indexOf("auto") > -1, j ? (d = l.position(), g = d.top, e = d.left) : (g = parseFloat(f) || 0, e = parseFloat(i) || 0), r.isFunction(b) && (b = b.call(a, c, r.extend({}, h))), null != b.top && (m.top = b.top - h.top + g), null != b.left && (m.left = b.left - h.left + e), "using" in b ? b.using.call(a, m) : l.css(m)
            }
        }, r.fn.extend({
            offset: function (a) {
                if (arguments.length) return void 0 === a ? this : this.each(function (b) {
                    r.offset.setOffset(this, a, b)
                });
                var b, c, d, e, f = this[0];
                if (f) return f.getClientRects().length ? (d = f.getBoundingClientRect(), b = f.ownerDocument, c = b.documentElement, e = b.defaultView, {
                    top: d.top + e.pageYOffset - c.clientTop,
                    left: d.left + e.pageXOffset - c.clientLeft
                }) : {top: 0, left: 0}
            }, position: function () {
                if (this[0]) {
                    var a, b, c = this[0], d = {top: 0, left: 0};
                    return "fixed" === r.css(c, "position") ? b = c.getBoundingClientRect() : (a = this.offsetParent(), b = this.offset(), B(a[0], "html") || (d = a.offset()), d = {
                        top: d.top + r.css(a[0], "borderTopWidth", !0),
                        left: d.left + r.css(a[0], "borderLeftWidth", !0)
                    }), {
                        top: b.top - d.top - r.css(c, "marginTop", !0),
                        left: b.left - d.left - r.css(c, "marginLeft", !0)
                    }
                }
            }, offsetParent: function () {
                return this.map(function () {
                    var a = this.offsetParent;
                    while (a && "static" === r.css(a, "position")) a = a.offsetParent;
                    return a || ra
                })
            }
        }), r.each({scrollLeft: "pageXOffset", scrollTop: "pageYOffset"}, function (a, b) {
            var c = "pageYOffset" === b;
            r.fn[a] = function (d) {
                return T(this, function (a, d, e) {
                    var f;
                    return r.isWindow(a) ? f = a : 9 === a.nodeType && (f = a.defaultView), void 0 === e ? f ? f[b] : a[d] : void(f ? f.scrollTo(c ? f.pageXOffset : e, c ? e : f.pageYOffset) : a[d] = e)
                }, a, d, arguments.length)
            }
        }), r.each(["top", "left"], function (a, b) {
            r.cssHooks[b] = Pa(o.pixelPosition, function (a, c) {
                if (c) return c = Oa(a, b), Ma.test(c) ? r(a).position()[b] + "px" : c
            })
        }), r.each({Height: "height", Width: "width"}, function (a, b) {
            r.each({padding: "inner" + a, content: b, "": "outer" + a}, function (c, d) {
                r.fn[d] = function (e, f) {
                    var g = arguments.length && (c || "boolean" != typeof e),
                        h = c || (e === !0 || f === !0 ? "margin" : "border");
                    return T(this, function (b, c, e) {
                        var f;
                        return r.isWindow(b) ? 0 === d.indexOf("outer") ? b["inner" + a] : b.document.documentElement["client" + a] : 9 === b.nodeType ? (f = b.documentElement, Math.max(b.body["scroll" + a], f["scroll" + a], b.body["offset" + a], f["offset" + a], f["client" + a])) : void 0 === e ? r.css(b, c, h) : r.style(b, c, e, h)
                    }, b, g ? e : void 0, g)
                }
            })
        }), r.fn.extend({
            bind: function (a, b, c) {
                return this.on(a, null, b, c)
            }, unbind: function (a, b) {
                return this.off(a, null, b)
            }, delegate: function (a, b, c, d) {
                return this.on(b, a, c, d)
            }, undelegate: function (a, b, c) {
                return 1 === arguments.length ? this.off(a, "**") : this.off(b, a || "**", c)
            }
        }), r.holdReady = function (a) {
            a ? r.readyWait++ : r.ready(!0)
        }, r.isArray = Array.isArray, r.parseJSON = JSON.parse, r.nodeName = B, "function" == typeof define && define.amd && define("jquery", [], function () {
            return r
        });
        var Vb = a.jQuery, Wb = a.$;
        return r.noConflict = function (b) {
            return a.$ === r && (a.$ = Wb), b && a.jQuery === r && (a.jQuery = Vb), r
        }, b || (a.jQuery = a.$ = r), r
    });

</script>
<script>
    /*!
  * Bootstrap v4.0.0 (https://getbootstrap.com)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
    !function (t, e) {
        "object" == typeof exports && "undefined" != typeof module ? e(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], e) : e(t.bootstrap = {}, t.jQuery)
    }(this, function (t, e) {
        "use strict";

        function n(t, e) {
            for (var n = 0; n < e.length; n++) {
                var i = e[n];
                i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
            }
        }

        function i(t, e, i) {
            return e && n(t.prototype, e), i && n(t, i), t
        }

        function r() {
            return (r = Object.assign || function (t) {
                for (var e = 1; e < arguments.length; e++) {
                    var n = arguments[e];
                    for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
                }
                return t
            }).apply(this, arguments)
        }

        for (var o, s, a, l, c, h, f, u, d, p, g, m, _, v, E, y, b, T, C, w, I, A, D, S, O, N, k = function (t) {
            var e = !1;

            function n(e) {
                var n = this, r = !1;
                return t(this).one(i.TRANSITION_END, function () {
                    r = !0
                }), setTimeout(function () {
                    r || i.triggerTransitionEnd(n)
                }, e), this
            }

            var i = {
                TRANSITION_END: "bsTransitionEnd", getUID: function (t) {
                    do {
                        t += ~~(1e6 * Math.random())
                    } while (document.getElementById(t));
                    return t
                }, getSelectorFromElement: function (e) {
                    var n, i = e.getAttribute("data-target");
                    i && "#" !== i || (i = e.getAttribute("href") || ""), "#" === i.charAt(0) && (n = i, i = n = "function" == typeof t.escapeSelector ? t.escapeSelector(n).substr(1) : n.replace(/(:|\.|\[|\]|,|=|@)/g, "\\$1"));
                    try {
                        return t(document).find(i).length > 0 ? i : null
                    } catch (t) {
                        return null
                    }
                }, reflow: function (t) {
                    return t.offsetHeight
                }, triggerTransitionEnd: function (n) {
                    t(n).trigger(e.end)
                }, supportsTransitionEnd: function () {
                    return Boolean(e)
                }, isElement: function (t) {
                    return (t[0] || t).nodeType
                }, typeCheckConfig: function (t, e, n) {
                    for (var r in n) if (Object.prototype.hasOwnProperty.call(n, r)) {
                        var o = n[r], s = e[r],
                            a = s && i.isElement(s) ? "element" : (l = s, {}.toString.call(l).match(/\s([a-zA-Z]+)/)[1].toLowerCase());
                        if (!new RegExp(o).test(a)) throw new Error(t.toUpperCase() + ': Option "' + r + '" provided type "' + a + '" but expected type "' + o + '".')
                    }
                    var l
                }
            };
            return e = ("undefined" == typeof window || !window.QUnit) && {end: "transitionend"}, t.fn.emulateTransitionEnd = n, i.supportsTransitionEnd() && (t.event.special[i.TRANSITION_END] = {
                bindType: e.end,
                delegateType: e.end,
                handle: function (e) {
                    if (t(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
                }
            }), i
        }(e = e && e.hasOwnProperty("default") ? e.default : e), L = (s = "alert", l = "." + (a = "bs.alert"), c = (o = e).fn[s], h = {
            CLOSE: "close" + l,
            CLOSED: "closed" + l,
            CLICK_DATA_API: "click" + l + ".data-api"
        }, f = "alert", u = "fade", d = "show", p = function () {
            function t(t) {
                this._element = t
            }

            var e = t.prototype;
            return e.close = function (t) {
                t = t || this._element;
                var e = this._getRootElement(t);
                this._triggerCloseEvent(e).isDefaultPrevented() || this._removeElement(e)
            }, e.dispose = function () {
                o.removeData(this._element, a), this._element = null
            }, e._getRootElement = function (t) {
                var e = k.getSelectorFromElement(t), n = !1;
                return e && (n = o(e)[0]), n || (n = o(t).closest("." + f)[0]), n
            }, e._triggerCloseEvent = function (t) {
                var e = o.Event(h.CLOSE);
                return o(t).trigger(e), e
            }, e._removeElement = function (t) {
                var e = this;
                o(t).removeClass(d), k.supportsTransitionEnd() && o(t).hasClass(u) ? o(t).one(k.TRANSITION_END, function (n) {
                    return e._destroyElement(t, n)
                }).emulateTransitionEnd(150) : this._destroyElement(t)
            }, e._destroyElement = function (t) {
                o(t).detach().trigger(h.CLOSED).remove()
            }, t._jQueryInterface = function (e) {
                return this.each(function () {
                    var n = o(this), i = n.data(a);
                    i || (i = new t(this), n.data(a, i)), "close" === e && i[e](this)
                })
            }, t._handleDismiss = function (t) {
                return function (e) {
                    e && e.preventDefault(), t.close(this)
                }
            }, i(t, null, [{
                key: "VERSION", get: function () {
                    return "4.0.0"
                }
            }]), t
        }(), o(document).on(h.CLICK_DATA_API, '[data-dismiss="alert"]', p._handleDismiss(new p)), o.fn[s] = p._jQueryInterface, o.fn[s].Constructor = p, o.fn[s].noConflict = function () {
            return o.fn[s] = c, p._jQueryInterface
        }, p), P = (m = "button", v = "." + (_ = "bs.button"), E = ".data-api", y = (g = e).fn[m], b = "active", T = "btn", C = "focus", w = '[data-toggle^="button"]', I = '[data-toggle="buttons"]', A = "input", D = ".active", S = ".btn", O = {
            CLICK_DATA_API: "click" + v + E,
            FOCUS_BLUR_DATA_API: "focus" + v + E + " blur" + v + E
        }, N = function () {
            function t(t) {
                this._element = t
            }

            var e = t.prototype;
            return e.toggle = function () {
                var t = !0, e = !0, n = g(this._element).closest(I)[0];
                if (n) {
                    var i = g(this._element).find(A)[0];
                    if (i) {
                        if ("radio" === i.type) if (i.checked && g(this._element).hasClass(b)) t = !1; else {
                            var r = g(n).find(D)[0];
                            r && g(r).removeClass(b)
                        }
                        if (t) {
                            if (i.hasAttribute("disabled") || n.hasAttribute("disabled") || i.classList.contains("disabled") || n.classList.contains("disabled")) return;
                            i.checked = !g(this._element).hasClass(b), g(i).trigger("change")
                        }
                        i.focus(), e = !1
                    }
                }
                e && this._element.setAttribute("aria-pressed", !g(this._element).hasClass(b)), t && g(this._element).toggleClass(b)
            }, e.dispose = function () {
                g.removeData(this._element, _), this._element = null
            }, t._jQueryInterface = function (e) {
                return this.each(function () {
                    var n = g(this).data(_);
                    n || (n = new t(this), g(this).data(_, n)), "toggle" === e && n[e]()
                })
            }, i(t, null, [{
                key: "VERSION", get: function () {
                    return "4.0.0"
                }
            }]), t
        }(), g(document).on(O.CLICK_DATA_API, w, function (t) {
            t.preventDefault();
            var e = t.target;
            g(e).hasClass(T) || (e = g(e).closest(S)), N._jQueryInterface.call(g(e), "toggle")
        }).on(O.FOCUS_BLUR_DATA_API, w, function (t) {
            var e = g(t.target).closest(S)[0];
            g(e).toggleClass(C, /^focus(in)?$/.test(t.type))
        }), g.fn[m] = N._jQueryInterface, g.fn[m].Constructor = N, g.fn[m].noConflict = function () {
            return g.fn[m] = y, N._jQueryInterface
        }, N), x = function (t) {
            var e = "carousel", n = "bs.carousel", o = "." + n, s = t.fn[e],
                a = {interval: 5e3, keyboard: !0, slide: !1, pause: "hover", wrap: !0}, l = {
                    interval: "(number|boolean)",
                    keyboard: "boolean",
                    slide: "(boolean|string)",
                    pause: "(string|boolean)",
                    wrap: "boolean"
                }, c = "next", h = "prev", f = "left", u = "right", d = {
                    SLIDE: "slide" + o,
                    SLID: "slid" + o,
                    KEYDOWN: "keydown" + o,
                    MOUSEENTER: "mouseenter" + o,
                    MOUSELEAVE: "mouseleave" + o,
                    TOUCHEND: "touchend" + o,
                    LOAD_DATA_API: "load" + o + ".data-api",
                    CLICK_DATA_API: "click" + o + ".data-api"
                }, p = "carousel", g = "active", m = "slide", _ = "carousel-item-right", v = "carousel-item-left",
                E = "carousel-item-next", y = "carousel-item-prev", b = {
                    ACTIVE: ".active",
                    ACTIVE_ITEM: ".active.carousel-item",
                    ITEM: ".carousel-item",
                    NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
                    INDICATORS: ".carousel-indicators",
                    DATA_SLIDE: "[data-slide], [data-slide-to]",
                    DATA_RIDE: '[data-ride="carousel"]'
                }, T = function () {
                    function s(e, n) {
                        this._items = null, this._interval = null, this._activeElement = null, this._isPaused = !1, this._isSliding = !1, this.touchTimeout = null, this._config = this._getConfig(n), this._element = t(e)[0], this._indicatorsElement = t(this._element).find(b.INDICATORS)[0], this._addEventListeners()
                    }

                    var T = s.prototype;
                    return T.next = function () {
                        this._isSliding || this._slide(c)
                    }, T.nextWhenVisible = function () {
                        !document.hidden && t(this._element).is(":visible") && "hidden" !== t(this._element).css("visibility") && this.next()
                    }, T.prev = function () {
                        this._isSliding || this._slide(h)
                    }, T.pause = function (e) {
                        e || (this._isPaused = !0), t(this._element).find(b.NEXT_PREV)[0] && k.supportsTransitionEnd() && (k.triggerTransitionEnd(this._element), this.cycle(!0)), clearInterval(this._interval), this._interval = null
                    }, T.cycle = function (t) {
                        t || (this._isPaused = !1), this._interval && (clearInterval(this._interval), this._interval = null), this._config.interval && !this._isPaused && (this._interval = setInterval((document.visibilityState ? this.nextWhenVisible : this.next).bind(this), this._config.interval))
                    }, T.to = function (e) {
                        var n = this;
                        this._activeElement = t(this._element).find(b.ACTIVE_ITEM)[0];
                        var i = this._getItemIndex(this._activeElement);
                        if (!(e > this._items.length - 1 || e < 0)) if (this._isSliding) t(this._element).one(d.SLID, function () {
                            return n.to(e)
                        }); else {
                            if (i === e) return this.pause(), void this.cycle();
                            var r = e > i ? c : h;
                            this._slide(r, this._items[e])
                        }
                    }, T.dispose = function () {
                        t(this._element).off(o), t.removeData(this._element, n), this._items = null, this._config = null, this._element = null, this._interval = null, this._isPaused = null, this._isSliding = null, this._activeElement = null, this._indicatorsElement = null
                    }, T._getConfig = function (t) {
                        return t = r({}, a, t), k.typeCheckConfig(e, t, l), t
                    }, T._addEventListeners = function () {
                        var e = this;
                        this._config.keyboard && t(this._element).on(d.KEYDOWN, function (t) {
                            return e._keydown(t)
                        }), "hover" === this._config.pause && (t(this._element).on(d.MOUSEENTER, function (t) {
                            return e.pause(t)
                        }).on(d.MOUSELEAVE, function (t) {
                            return e.cycle(t)
                        }), "ontouchstart" in document.documentElement && t(this._element).on(d.TOUCHEND, function () {
                            e.pause(), e.touchTimeout && clearTimeout(e.touchTimeout), e.touchTimeout = setTimeout(function (t) {
                                return e.cycle(t)
                            }, 500 + e._config.interval)
                        }))
                    }, T._keydown = function (t) {
                        if (!/input|textarea/i.test(t.target.tagName)) switch (t.which) {
                            case 37:
                                t.preventDefault(), this.prev();
                                break;
                            case 39:
                                t.preventDefault(), this.next()
                        }
                    }, T._getItemIndex = function (e) {
                        return this._items = t.makeArray(t(e).parent().find(b.ITEM)), this._items.indexOf(e)
                    }, T._getItemByDirection = function (t, e) {
                        var n = t === c, i = t === h, r = this._getItemIndex(e), o = this._items.length - 1;
                        if ((i && 0 === r || n && r === o) && !this._config.wrap) return e;
                        var s = (r + (t === h ? -1 : 1)) % this._items.length;
                        return -1 === s ? this._items[this._items.length - 1] : this._items[s]
                    }, T._triggerSlideEvent = function (e, n) {
                        var i = this._getItemIndex(e), r = this._getItemIndex(t(this._element).find(b.ACTIVE_ITEM)[0]),
                            o = t.Event(d.SLIDE, {relatedTarget: e, direction: n, from: r, to: i});
                        return t(this._element).trigger(o), o
                    }, T._setActiveIndicatorElement = function (e) {
                        if (this._indicatorsElement) {
                            t(this._indicatorsElement).find(b.ACTIVE).removeClass(g);
                            var n = this._indicatorsElement.children[this._getItemIndex(e)];
                            n && t(n).addClass(g)
                        }
                    }, T._slide = function (e, n) {
                        var i, r, o, s = this, a = t(this._element).find(b.ACTIVE_ITEM)[0], l = this._getItemIndex(a),
                            h = n || a && this._getItemByDirection(e, a), p = this._getItemIndex(h),
                            T = Boolean(this._interval);
                        if (e === c ? (i = v, r = E, o = f) : (i = _, r = y, o = u), h && t(h).hasClass(g)) this._isSliding = !1; else if (!this._triggerSlideEvent(h, o).isDefaultPrevented() && a && h) {
                            this._isSliding = !0, T && this.pause(), this._setActiveIndicatorElement(h);
                            var C = t.Event(d.SLID, {relatedTarget: h, direction: o, from: l, to: p});
                            k.supportsTransitionEnd() && t(this._element).hasClass(m) ? (t(h).addClass(r), k.reflow(h), t(a).addClass(i), t(h).addClass(i), t(a).one(k.TRANSITION_END, function () {
                                t(h).removeClass(i + " " + r).addClass(g), t(a).removeClass(g + " " + r + " " + i), s._isSliding = !1, setTimeout(function () {
                                    return t(s._element).trigger(C)
                                }, 0)
                            }).emulateTransitionEnd(600)) : (t(a).removeClass(g), t(h).addClass(g), this._isSliding = !1, t(this._element).trigger(C)), T && this.cycle()
                        }
                    }, s._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n), o = r({}, a, t(this).data());
                            "object" == typeof e && (o = r({}, o, e));
                            var l = "string" == typeof e ? e : o.slide;
                            if (i || (i = new s(this, o), t(this).data(n, i)), "number" == typeof e) i.to(e); else if ("string" == typeof l) {
                                if ("undefined" == typeof i[l]) throw new TypeError('No method named "' + l + '"');
                                i[l]()
                            } else o.interval && (i.pause(), i.cycle())
                        })
                    }, s._dataApiClickHandler = function (e) {
                        var i = k.getSelectorFromElement(this);
                        if (i) {
                            var o = t(i)[0];
                            if (o && t(o).hasClass(p)) {
                                var a = r({}, t(o).data(), t(this).data()), l = this.getAttribute("data-slide-to");
                                l && (a.interval = !1), s._jQueryInterface.call(t(o), a), l && t(o).data(n).to(l), e.preventDefault()
                            }
                        }
                    }, i(s, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), s
                }();
            return t(document).on(d.CLICK_DATA_API, b.DATA_SLIDE, T._dataApiClickHandler), t(window).on(d.LOAD_DATA_API, function () {
                t(b.DATA_RIDE).each(function () {
                    var e = t(this);
                    T._jQueryInterface.call(e, e.data())
                })
            }), t.fn[e] = T._jQueryInterface, t.fn[e].Constructor = T, t.fn[e].noConflict = function () {
                return t.fn[e] = s, T._jQueryInterface
            }, T
        }(e), R = function (t) {
            var e = "collapse", n = "bs.collapse", o = "." + n, s = t.fn[e], a = {toggle: !0, parent: ""},
                l = {toggle: "boolean", parent: "(string|element)"}, c = {
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    CLICK_DATA_API: "click" + o + ".data-api"
                }, h = "show", f = "collapse", u = "collapsing", d = "collapsed", p = "width", g = "height",
                m = {ACTIVES: ".show, .collapsing", DATA_TOGGLE: '[data-toggle="collapse"]'}, _ = function () {
                    function o(e, n) {
                        this._isTransitioning = !1, this._element = e, this._config = this._getConfig(n), this._triggerArray = t.makeArray(t('[data-toggle="collapse"][href="#' + e.id + '"],[data-toggle="collapse"][data-target="#' + e.id + '"]'));
                        for (var i = t(m.DATA_TOGGLE), r = 0; r < i.length; r++) {
                            var o = i[r], s = k.getSelectorFromElement(o);
                            null !== s && t(s).filter(e).length > 0 && (this._selector = s, this._triggerArray.push(o))
                        }
                        this._parent = this._config.parent ? this._getParent() : null, this._config.parent || this._addAriaAndCollapsedClass(this._element, this._triggerArray), this._config.toggle && this.toggle()
                    }

                    var s = o.prototype;
                    return s.toggle = function () {
                        t(this._element).hasClass(h) ? this.hide() : this.show()
                    }, s.show = function () {
                        var e, i, r = this;
                        if (!this._isTransitioning && !t(this._element).hasClass(h) && (this._parent && 0 === (e = t.makeArray(t(this._parent).find(m.ACTIVES).filter('[data-parent="' + this._config.parent + '"]'))).length && (e = null), !(e && (i = t(e).not(this._selector).data(n)) && i._isTransitioning))) {
                            var s = t.Event(c.SHOW);
                            if (t(this._element).trigger(s), !s.isDefaultPrevented()) {
                                e && (o._jQueryInterface.call(t(e).not(this._selector), "hide"), i || t(e).data(n, null));
                                var a = this._getDimension();
                                t(this._element).removeClass(f).addClass(u), this._element.style[a] = 0, this._triggerArray.length > 0 && t(this._triggerArray).removeClass(d).attr("aria-expanded", !0), this.setTransitioning(!0);
                                var l = function () {
                                    t(r._element).removeClass(u).addClass(f).addClass(h), r._element.style[a] = "", r.setTransitioning(!1), t(r._element).trigger(c.SHOWN)
                                };
                                if (k.supportsTransitionEnd()) {
                                    var p = "scroll" + (a[0].toUpperCase() + a.slice(1));
                                    t(this._element).one(k.TRANSITION_END, l).emulateTransitionEnd(600), this._element.style[a] = this._element[p] + "px"
                                } else l()
                            }
                        }
                    }, s.hide = function () {
                        var e = this;
                        if (!this._isTransitioning && t(this._element).hasClass(h)) {
                            var n = t.Event(c.HIDE);
                            if (t(this._element).trigger(n), !n.isDefaultPrevented()) {
                                var i = this._getDimension();
                                if (this._element.style[i] = this._element.getBoundingClientRect()[i] + "px", k.reflow(this._element), t(this._element).addClass(u).removeClass(f).removeClass(h), this._triggerArray.length > 0) for (var r = 0; r < this._triggerArray.length; r++) {
                                    var o = this._triggerArray[r], s = k.getSelectorFromElement(o);
                                    if (null !== s) t(s).hasClass(h) || t(o).addClass(d).attr("aria-expanded", !1)
                                }
                                this.setTransitioning(!0);
                                var a = function () {
                                    e.setTransitioning(!1), t(e._element).removeClass(u).addClass(f).trigger(c.HIDDEN)
                                };
                                this._element.style[i] = "", k.supportsTransitionEnd() ? t(this._element).one(k.TRANSITION_END, a).emulateTransitionEnd(600) : a()
                            }
                        }
                    }, s.setTransitioning = function (t) {
                        this._isTransitioning = t
                    }, s.dispose = function () {
                        t.removeData(this._element, n), this._config = null, this._parent = null, this._element = null, this._triggerArray = null, this._isTransitioning = null
                    }, s._getConfig = function (t) {
                        return (t = r({}, a, t)).toggle = Boolean(t.toggle), k.typeCheckConfig(e, t, l), t
                    }, s._getDimension = function () {
                        return t(this._element).hasClass(p) ? p : g
                    }, s._getParent = function () {
                        var e = this, n = null;
                        k.isElement(this._config.parent) ? (n = this._config.parent, "undefined" != typeof this._config.parent.jquery && (n = this._config.parent[0])) : n = t(this._config.parent)[0];
                        var i = '[data-toggle="collapse"][data-parent="' + this._config.parent + '"]';
                        return t(n).find(i).each(function (t, n) {
                            e._addAriaAndCollapsedClass(o._getTargetFromElement(n), [n])
                        }), n
                    }, s._addAriaAndCollapsedClass = function (e, n) {
                        if (e) {
                            var i = t(e).hasClass(h);
                            n.length > 0 && t(n).toggleClass(d, !i).attr("aria-expanded", i)
                        }
                    }, o._getTargetFromElement = function (e) {
                        var n = k.getSelectorFromElement(e);
                        return n ? t(n)[0] : null
                    }, o._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this), s = i.data(n), l = r({}, a, i.data(), "object" == typeof e && e);
                            if (!s && l.toggle && /show|hide/.test(e) && (l.toggle = !1), s || (s = new o(this, l), i.data(n, s)), "string" == typeof e) {
                                if ("undefined" == typeof s[e]) throw new TypeError('No method named "' + e + '"');
                                s[e]()
                            }
                        })
                    }, i(o, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), o
                }();
            return t(document).on(c.CLICK_DATA_API, m.DATA_TOGGLE, function (e) {
                "A" === e.currentTarget.tagName && e.preventDefault();
                var i = t(this), r = k.getSelectorFromElement(this);
                t(r).each(function () {
                    var e = t(this), r = e.data(n) ? "toggle" : i.data();
                    _._jQueryInterface.call(e, r)
                })
            }), t.fn[e] = _._jQueryInterface, t.fn[e].Constructor = _, t.fn[e].noConflict = function () {
                return t.fn[e] = s, _._jQueryInterface
            }, _
        }(e), j = "undefined" != typeof window && "undefined" != typeof document, H = ["Edge", "Trident", "Firefox"], M = 0, W = 0; W < H.length; W += 1) if (j && navigator.userAgent.indexOf(H[W]) >= 0) {
            M = 1;
            break
        }
        var U = j && window.Promise ? function (t) {
            var e = !1;
            return function () {
                e || (e = !0, window.Promise.resolve().then(function () {
                    e = !1, t()
                }))
            }
        } : function (t) {
            var e = !1;
            return function () {
                e || (e = !0, setTimeout(function () {
                    e = !1, t()
                }, M))
            }
        };

        function B(t) {
            return t && "[object Function]" === {}.toString.call(t)
        }

        function F(t, e) {
            if (1 !== t.nodeType) return [];
            var n = getComputedStyle(t, null);
            return e ? n[e] : n
        }

        function K(t) {
            return "HTML" === t.nodeName ? t : t.parentNode || t.host
        }

        function V(t) {
            if (!t) return document.body;
            switch (t.nodeName) {
                case"HTML":
                case"BODY":
                    return t.ownerDocument.body;
                case"#document":
                    return t.body
            }
            var e = F(t), n = e.overflow, i = e.overflowX, r = e.overflowY;
            return /(auto|scroll)/.test(n + r + i) ? t : V(K(t))
        }

        function Q(t) {
            var e = t && t.offsetParent, n = e && e.nodeName;
            return n && "BODY" !== n && "HTML" !== n ? -1 !== ["TD", "TABLE"].indexOf(e.nodeName) && "static" === F(e, "position") ? Q(e) : e : t ? t.ownerDocument.documentElement : document.documentElement
        }

        function Y(t) {
            return null !== t.parentNode ? Y(t.parentNode) : t
        }

        function G(t, e) {
            if (!(t && t.nodeType && e && e.nodeType)) return document.documentElement;
            var n = t.compareDocumentPosition(e) & Node.DOCUMENT_POSITION_FOLLOWING, i = n ? t : e, r = n ? e : t,
                o = document.createRange();
            o.setStart(i, 0), o.setEnd(r, 0);
            var s, a, l = o.commonAncestorContainer;
            if (t !== l && e !== l || i.contains(r)) return "BODY" === (a = (s = l).nodeName) || "HTML" !== a && Q(s.firstElementChild) !== s ? Q(l) : l;
            var c = Y(t);
            return c.host ? G(c.host, e) : G(t, Y(e).host)
        }

        function q(t) {
            var e = "top" === (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "top") ? "scrollTop" : "scrollLeft",
                n = t.nodeName;
            if ("BODY" === n || "HTML" === n) {
                var i = t.ownerDocument.documentElement;
                return (t.ownerDocument.scrollingElement || i)[e]
            }
            return t[e]
        }

        function z(t, e) {
            var n = "x" === e ? "Left" : "Top", i = "Left" === n ? "Right" : "Bottom";
            return parseFloat(t["border" + n + "Width"], 10) + parseFloat(t["border" + i + "Width"], 10)
        }

        var X = void 0, Z = function () {
            return void 0 === X && (X = -1 !== navigator.appVersion.indexOf("MSIE 10")), X
        };

        function J(t, e, n, i) {
            return Math.max(e["offset" + t], e["scroll" + t], n["client" + t], n["offset" + t], n["scroll" + t], Z() ? n["offset" + t] + i["margin" + ("Height" === t ? "Top" : "Left")] + i["margin" + ("Height" === t ? "Bottom" : "Right")] : 0)
        }

        function $() {
            var t = document.body, e = document.documentElement, n = Z() && getComputedStyle(e);
            return {height: J("Height", t, e, n), width: J("Width", t, e, n)}
        }

        var tt = function (t, e) {
            if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
        }, et = function () {
            function t(t, e) {
                for (var n = 0; n < e.length; n++) {
                    var i = e[n];
                    i.enumerable = i.enumerable || !1, i.configurable = !0, "value" in i && (i.writable = !0), Object.defineProperty(t, i.key, i)
                }
            }

            return function (e, n, i) {
                return n && t(e.prototype, n), i && t(e, i), e
            }
        }(), nt = function (t, e, n) {
            return e in t ? Object.defineProperty(t, e, {
                value: n,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : t[e] = n, t
        }, it = Object.assign || function (t) {
            for (var e = 1; e < arguments.length; e++) {
                var n = arguments[e];
                for (var i in n) Object.prototype.hasOwnProperty.call(n, i) && (t[i] = n[i])
            }
            return t
        };

        function rt(t) {
            return it({}, t, {right: t.left + t.width, bottom: t.top + t.height})
        }

        function ot(t) {
            var e = {};
            if (Z()) try {
                e = t.getBoundingClientRect();
                var n = q(t, "top"), i = q(t, "left");
                e.top += n, e.left += i, e.bottom += n, e.right += i
            } catch (t) {
            } else e = t.getBoundingClientRect();
            var r = {left: e.left, top: e.top, width: e.right - e.left, height: e.bottom - e.top},
                o = "HTML" === t.nodeName ? $() : {}, s = o.width || t.clientWidth || r.right - r.left,
                a = o.height || t.clientHeight || r.bottom - r.top, l = t.offsetWidth - s, c = t.offsetHeight - a;
            if (l || c) {
                var h = F(t);
                l -= z(h, "x"), c -= z(h, "y"), r.width -= l, r.height -= c
            }
            return rt(r)
        }

        function st(t, e) {
            var n = Z(), i = "HTML" === e.nodeName, r = ot(t), o = ot(e), s = V(t), a = F(e),
                l = parseFloat(a.borderTopWidth, 10), c = parseFloat(a.borderLeftWidth, 10),
                h = rt({top: r.top - o.top - l, left: r.left - o.left - c, width: r.width, height: r.height});
            if (h.marginTop = 0, h.marginLeft = 0, !n && i) {
                var f = parseFloat(a.marginTop, 10), u = parseFloat(a.marginLeft, 10);
                h.top -= l - f, h.bottom -= l - f, h.left -= c - u, h.right -= c - u, h.marginTop = f, h.marginLeft = u
            }
            return (n ? e.contains(s) : e === s && "BODY" !== s.nodeName) && (h = function (t, e) {
                var n = arguments.length > 2 && void 0 !== arguments[2] && arguments[2], i = q(e, "top"),
                    r = q(e, "left"), o = n ? -1 : 1;
                return t.top += i * o, t.bottom += i * o, t.left += r * o, t.right += r * o, t
            }(h, e)), h
        }

        function at(t, e, n, i) {
            var r, o, s, a, l, c, h, f = {top: 0, left: 0}, u = G(t, e);
            if ("viewport" === i) o = (r = u).ownerDocument.documentElement, s = st(r, o), a = Math.max(o.clientWidth, window.innerWidth || 0), l = Math.max(o.clientHeight, window.innerHeight || 0), c = q(o), h = q(o, "left"), f = rt({
                top: c - s.top + s.marginTop,
                left: h - s.left + s.marginLeft,
                width: a,
                height: l
            }); else {
                var d = void 0;
                "scrollParent" === i ? "BODY" === (d = V(K(e))).nodeName && (d = t.ownerDocument.documentElement) : d = "window" === i ? t.ownerDocument.documentElement : i;
                var p = st(d, u);
                if ("HTML" !== d.nodeName || function t(e) {
                        var n = e.nodeName;
                        return "BODY" !== n && "HTML" !== n && ("fixed" === F(e, "position") || t(K(e)))
                    }(u)) f = p; else {
                    var g = $(), m = g.height, _ = g.width;
                    f.top += p.top - p.marginTop, f.bottom = m + p.top, f.left += p.left - p.marginLeft, f.right = _ + p.left
                }
            }
            return f.left += n, f.top += n, f.right -= n, f.bottom -= n, f
        }

        function lt(t, e, n, i, r) {
            var o = arguments.length > 5 && void 0 !== arguments[5] ? arguments[5] : 0;
            if (-1 === t.indexOf("auto")) return t;
            var s = at(n, i, o, r), a = {
                top: {width: s.width, height: e.top - s.top},
                right: {width: s.right - e.right, height: s.height},
                bottom: {width: s.width, height: s.bottom - e.bottom},
                left: {width: e.left - s.left, height: s.height}
            }, l = Object.keys(a).map(function (t) {
                return it({key: t}, a[t], {area: (e = a[t], e.width * e.height)});
                var e
            }).sort(function (t, e) {
                return e.area - t.area
            }), c = l.filter(function (t) {
                var e = t.width, i = t.height;
                return e >= n.clientWidth && i >= n.clientHeight
            }), h = c.length > 0 ? c[0].key : l[0].key, f = t.split("-")[1];
            return h + (f ? "-" + f : "")
        }

        function ct(t, e, n) {
            return st(n, G(e, n))
        }

        function ht(t) {
            var e = getComputedStyle(t), n = parseFloat(e.marginTop) + parseFloat(e.marginBottom),
                i = parseFloat(e.marginLeft) + parseFloat(e.marginRight);
            return {width: t.offsetWidth + i, height: t.offsetHeight + n}
        }

        function ft(t) {
            var e = {left: "right", right: "left", bottom: "top", top: "bottom"};
            return t.replace(/left|right|bottom|top/g, function (t) {
                return e[t]
            })
        }

        function ut(t, e, n) {
            n = n.split("-")[0];
            var i = ht(t), r = {width: i.width, height: i.height}, o = -1 !== ["right", "left"].indexOf(n),
                s = o ? "top" : "left", a = o ? "left" : "top", l = o ? "height" : "width", c = o ? "width" : "height";
            return r[s] = e[s] + e[l] / 2 - i[l] / 2, r[a] = n === a ? e[a] - i[c] : e[ft(a)], r
        }

        function dt(t, e) {
            return Array.prototype.find ? t.find(e) : t.filter(e)[0]
        }

        function pt(t, e, n) {
            return (void 0 === n ? t : t.slice(0, function (t, e, n) {
                if (Array.prototype.findIndex) return t.findIndex(function (t) {
                    return t[e] === n
                });
                var i = dt(t, function (t) {
                    return t[e] === n
                });
                return t.indexOf(i)
            }(t, "name", n))).forEach(function (t) {
                t.function && console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
                var n = t.function || t.fn;
                t.enabled && B(n) && (e.offsets.popper = rt(e.offsets.popper), e.offsets.reference = rt(e.offsets.reference), e = n(e, t))
            }), e
        }

        function gt(t, e) {
            return t.some(function (t) {
                var n = t.name;
                return t.enabled && n === e
            })
        }

        function mt(t) {
            for (var e = [!1, "ms", "Webkit", "Moz", "O"], n = t.charAt(0).toUpperCase() + t.slice(1), i = 0; i < e.length - 1; i++) {
                var r = e[i], o = r ? "" + r + n : t;
                if ("undefined" != typeof document.body.style[o]) return o
            }
            return null
        }

        function _t(t) {
            var e = t.ownerDocument;
            return e ? e.defaultView : window
        }

        function vt(t, e, n, i) {
            n.updateBound = i, _t(t).addEventListener("resize", n.updateBound, {passive: !0});
            var r = V(t);
            return function t(e, n, i, r) {
                var o = "BODY" === e.nodeName, s = o ? e.ownerDocument.defaultView : e;
                s.addEventListener(n, i, {passive: !0}), o || t(V(s.parentNode), n, i, r), r.push(s)
            }(r, "scroll", n.updateBound, n.scrollParents), n.scrollElement = r, n.eventsEnabled = !0, n
        }

        function Et() {
            var t, e;
            this.state.eventsEnabled && (cancelAnimationFrame(this.scheduleUpdate), this.state = (t = this.reference, e = this.state, _t(t).removeEventListener("resize", e.updateBound), e.scrollParents.forEach(function (t) {
                t.removeEventListener("scroll", e.updateBound)
            }), e.updateBound = null, e.scrollParents = [], e.scrollElement = null, e.eventsEnabled = !1, e))
        }

        function yt(t) {
            return "" !== t && !isNaN(parseFloat(t)) && isFinite(t)
        }

        function bt(t, e) {
            Object.keys(e).forEach(function (n) {
                var i = "";
                -1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(n) && yt(e[n]) && (i = "px"), t.style[n] = e[n] + i
            })
        }

        function Tt(t, e, n) {
            var i = dt(t, function (t) {
                return t.name === e
            }), r = !!i && t.some(function (t) {
                return t.name === n && t.enabled && t.order < i.order
            });
            if (!r) {
                var o = "`" + e + "`", s = "`" + n + "`";
                console.warn(s + " modifier is required by " + o + " modifier in order to work, be sure to include it before " + o + "!")
            }
            return r
        }

        var Ct = ["auto-start", "auto", "auto-end", "top-start", "top", "top-end", "right-start", "right", "right-end", "bottom-end", "bottom", "bottom-start", "left-end", "left", "left-start"],
            wt = Ct.slice(3);

        function It(t) {
            var e = arguments.length > 1 && void 0 !== arguments[1] && arguments[1], n = wt.indexOf(t),
                i = wt.slice(n + 1).concat(wt.slice(0, n));
            return e ? i.reverse() : i
        }

        var At = {FLIP: "flip", CLOCKWISE: "clockwise", COUNTERCLOCKWISE: "counterclockwise"};

        function Dt(t, e, n, i) {
            var r = [0, 0], o = -1 !== ["right", "left"].indexOf(i), s = t.split(/(\+|\-)/).map(function (t) {
                return t.trim()
            }), a = s.indexOf(dt(s, function (t) {
                return -1 !== t.search(/,|\s/)
            }));
            s[a] && -1 === s[a].indexOf(",") && console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");
            var l = /\s*,\s*|\s+/,
                c = -1 !== a ? [s.slice(0, a).concat([s[a].split(l)[0]]), [s[a].split(l)[1]].concat(s.slice(a + 1))] : [s];
            return (c = c.map(function (t, i) {
                var r = (1 === i ? !o : o) ? "height" : "width", s = !1;
                return t.reduce(function (t, e) {
                    return "" === t[t.length - 1] && -1 !== ["+", "-"].indexOf(e) ? (t[t.length - 1] = e, s = !0, t) : s ? (t[t.length - 1] += e, s = !1, t) : t.concat(e)
                }, []).map(function (t) {
                    return function (t, e, n, i) {
                        var r = t.match(/((?:\-|\+)?\d*\.?\d*)(.*)/), o = +r[1], s = r[2];
                        if (!o) return t;
                        if (0 === s.indexOf("%")) {
                            var a = void 0;
                            switch (s) {
                                case"%p":
                                    a = n;
                                    break;
                                case"%":
                                case"%r":
                                default:
                                    a = i
                            }
                            return rt(a)[e] / 100 * o
                        }
                        if ("vh" === s || "vw" === s) return ("vh" === s ? Math.max(document.documentElement.clientHeight, window.innerHeight || 0) : Math.max(document.documentElement.clientWidth, window.innerWidth || 0)) / 100 * o;
                        return o
                    }(t, r, e, n)
                })
            })).forEach(function (t, e) {
                t.forEach(function (n, i) {
                    yt(n) && (r[e] += n * ("-" === t[i - 1] ? -1 : 1))
                })
            }), r
        }

        var St = {
            placement: "bottom", eventsEnabled: !0, removeOnDestroy: !1, onCreate: function () {
            }, onUpdate: function () {
            }, modifiers: {
                shift: {
                    order: 100, enabled: !0, fn: function (t) {
                        var e = t.placement, n = e.split("-")[0], i = e.split("-")[1];
                        if (i) {
                            var r = t.offsets, o = r.reference, s = r.popper, a = -1 !== ["bottom", "top"].indexOf(n),
                                l = a ? "left" : "top", c = a ? "width" : "height",
                                h = {start: nt({}, l, o[l]), end: nt({}, l, o[l] + o[c] - s[c])};
                            t.offsets.popper = it({}, s, h[i])
                        }
                        return t
                    }
                }, offset: {
                    order: 200, enabled: !0, fn: function (t, e) {
                        var n = e.offset, i = t.placement, r = t.offsets, o = r.popper, s = r.reference,
                            a = i.split("-")[0], l = void 0;
                        return l = yt(+n) ? [+n, 0] : Dt(n, o, s, a), "left" === a ? (o.top += l[0], o.left -= l[1]) : "right" === a ? (o.top += l[0], o.left += l[1]) : "top" === a ? (o.left += l[0], o.top -= l[1]) : "bottom" === a && (o.left += l[0], o.top += l[1]), t.popper = o, t
                    }, offset: 0
                }, preventOverflow: {
                    order: 300, enabled: !0, fn: function (t, e) {
                        var n = e.boundariesElement || Q(t.instance.popper);
                        t.instance.reference === n && (n = Q(n));
                        var i = at(t.instance.popper, t.instance.reference, e.padding, n);
                        e.boundaries = i;
                        var r = e.priority, o = t.offsets.popper, s = {
                            primary: function (t) {
                                var n = o[t];
                                return o[t] < i[t] && !e.escapeWithReference && (n = Math.max(o[t], i[t])), nt({}, t, n)
                            }, secondary: function (t) {
                                var n = "right" === t ? "left" : "top", r = o[n];
                                return o[t] > i[t] && !e.escapeWithReference && (r = Math.min(o[n], i[t] - ("right" === t ? o.width : o.height))), nt({}, n, r)
                            }
                        };
                        return r.forEach(function (t) {
                            var e = -1 !== ["left", "top"].indexOf(t) ? "primary" : "secondary";
                            o = it({}, o, s[e](t))
                        }), t.offsets.popper = o, t
                    }, priority: ["left", "right", "top", "bottom"], padding: 5, boundariesElement: "scrollParent"
                }, keepTogether: {
                    order: 400, enabled: !0, fn: function (t) {
                        var e = t.offsets, n = e.popper, i = e.reference, r = t.placement.split("-")[0], o = Math.floor,
                            s = -1 !== ["top", "bottom"].indexOf(r), a = s ? "right" : "bottom", l = s ? "left" : "top",
                            c = s ? "width" : "height";
                        return n[a] < o(i[l]) && (t.offsets.popper[l] = o(i[l]) - n[c]), n[l] > o(i[a]) && (t.offsets.popper[l] = o(i[a])), t
                    }
                }, arrow: {
                    order: 500, enabled: !0, fn: function (t, e) {
                        var n;
                        if (!Tt(t.instance.modifiers, "arrow", "keepTogether")) return t;
                        var i = e.element;
                        if ("string" == typeof i) {
                            if (!(i = t.instance.popper.querySelector(i))) return t
                        } else if (!t.instance.popper.contains(i)) return console.warn("WARNING: `arrow.element` must be child of its popper element!"), t;
                        var r = t.placement.split("-")[0], o = t.offsets, s = o.popper, a = o.reference,
                            l = -1 !== ["left", "right"].indexOf(r), c = l ? "height" : "width", h = l ? "Top" : "Left",
                            f = h.toLowerCase(), u = l ? "left" : "top", d = l ? "bottom" : "right", p = ht(i)[c];
                        a[d] - p < s[f] && (t.offsets.popper[f] -= s[f] - (a[d] - p)), a[f] + p > s[d] && (t.offsets.popper[f] += a[f] + p - s[d]), t.offsets.popper = rt(t.offsets.popper);
                        var g = a[f] + a[c] / 2 - p / 2, m = F(t.instance.popper), _ = parseFloat(m["margin" + h], 10),
                            v = parseFloat(m["border" + h + "Width"], 10), E = g - t.offsets.popper[f] - _ - v;
                        return E = Math.max(Math.min(s[c] - p, E), 0), t.arrowElement = i, t.offsets.arrow = (nt(n = {}, f, Math.round(E)), nt(n, u, ""), n), t
                    }, element: "[x-arrow]"
                }, flip: {
                    order: 600, enabled: !0, fn: function (t, e) {
                        if (gt(t.instance.modifiers, "inner")) return t;
                        if (t.flipped && t.placement === t.originalPlacement) return t;
                        var n = at(t.instance.popper, t.instance.reference, e.padding, e.boundariesElement),
                            i = t.placement.split("-")[0], r = ft(i), o = t.placement.split("-")[1] || "", s = [];
                        switch (e.behavior) {
                            case At.FLIP:
                                s = [i, r];
                                break;
                            case At.CLOCKWISE:
                                s = It(i);
                                break;
                            case At.COUNTERCLOCKWISE:
                                s = It(i, !0);
                                break;
                            default:
                                s = e.behavior
                        }
                        return s.forEach(function (a, l) {
                            if (i !== a || s.length === l + 1) return t;
                            i = t.placement.split("-")[0], r = ft(i);
                            var c, h = t.offsets.popper, f = t.offsets.reference, u = Math.floor,
                                d = "left" === i && u(h.right) > u(f.left) || "right" === i && u(h.left) < u(f.right) || "top" === i && u(h.bottom) > u(f.top) || "bottom" === i && u(h.top) < u(f.bottom),
                                p = u(h.left) < u(n.left), g = u(h.right) > u(n.right), m = u(h.top) < u(n.top),
                                _ = u(h.bottom) > u(n.bottom),
                                v = "left" === i && p || "right" === i && g || "top" === i && m || "bottom" === i && _,
                                E = -1 !== ["top", "bottom"].indexOf(i),
                                y = !!e.flipVariations && (E && "start" === o && p || E && "end" === o && g || !E && "start" === o && m || !E && "end" === o && _);
                            (d || v || y) && (t.flipped = !0, (d || v) && (i = s[l + 1]), y && (o = "end" === (c = o) ? "start" : "start" === c ? "end" : c), t.placement = i + (o ? "-" + o : ""), t.offsets.popper = it({}, t.offsets.popper, ut(t.instance.popper, t.offsets.reference, t.placement)), t = pt(t.instance.modifiers, t, "flip"))
                        }), t
                    }, behavior: "flip", padding: 5, boundariesElement: "viewport"
                }, inner: {
                    order: 700, enabled: !1, fn: function (t) {
                        var e = t.placement, n = e.split("-")[0], i = t.offsets, r = i.popper, o = i.reference,
                            s = -1 !== ["left", "right"].indexOf(n), a = -1 === ["top", "left"].indexOf(n);
                        return r[s ? "left" : "top"] = o[n] - (a ? r[s ? "width" : "height"] : 0), t.placement = ft(e), t.offsets.popper = rt(r), t
                    }
                }, hide: {
                    order: 800, enabled: !0, fn: function (t) {
                        if (!Tt(t.instance.modifiers, "hide", "preventOverflow")) return t;
                        var e = t.offsets.reference, n = dt(t.instance.modifiers, function (t) {
                            return "preventOverflow" === t.name
                        }).boundaries;
                        if (e.bottom < n.top || e.left > n.right || e.top > n.bottom || e.right < n.left) {
                            if (!0 === t.hide) return t;
                            t.hide = !0, t.attributes["x-out-of-boundaries"] = ""
                        } else {
                            if (!1 === t.hide) return t;
                            t.hide = !1, t.attributes["x-out-of-boundaries"] = !1
                        }
                        return t
                    }
                }, computeStyle: {
                    order: 850, enabled: !0, fn: function (t, e) {
                        var n = e.x, i = e.y, r = t.offsets.popper, o = dt(t.instance.modifiers, function (t) {
                            return "applyStyle" === t.name
                        }).gpuAcceleration;
                        void 0 !== o && console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");
                        var s = void 0 !== o ? o : e.gpuAcceleration, a = ot(Q(t.instance.popper)),
                            l = {position: r.position}, c = {
                                left: Math.floor(r.left),
                                top: Math.floor(r.top),
                                bottom: Math.floor(r.bottom),
                                right: Math.floor(r.right)
                            }, h = "bottom" === n ? "top" : "bottom", f = "right" === i ? "left" : "right",
                            u = mt("transform"), d = void 0, p = void 0;
                        if (p = "bottom" === h ? -a.height + c.bottom : c.top, d = "right" === f ? -a.width + c.right : c.left, s && u) l[u] = "translate3d(" + d + "px, " + p + "px, 0)", l[h] = 0, l[f] = 0, l.willChange = "transform"; else {
                            var g = "bottom" === h ? -1 : 1, m = "right" === f ? -1 : 1;
                            l[h] = p * g, l[f] = d * m, l.willChange = h + ", " + f
                        }
                        var _ = {"x-placement": t.placement};
                        return t.attributes = it({}, _, t.attributes), t.styles = it({}, l, t.styles), t.arrowStyles = it({}, t.offsets.arrow, t.arrowStyles), t
                    }, gpuAcceleration: !0, x: "bottom", y: "right"
                }, applyStyle: {
                    order: 900, enabled: !0, fn: function (t) {
                        var e, n;
                        return bt(t.instance.popper, t.styles), e = t.instance.popper, n = t.attributes, Object.keys(n).forEach(function (t) {
                            !1 !== n[t] ? e.setAttribute(t, n[t]) : e.removeAttribute(t)
                        }), t.arrowElement && Object.keys(t.arrowStyles).length && bt(t.arrowElement, t.arrowStyles), t
                    }, onLoad: function (t, e, n, i, r) {
                        var o = ct(0, e, t),
                            s = lt(n.placement, o, e, t, n.modifiers.flip.boundariesElement, n.modifiers.flip.padding);
                        return e.setAttribute("x-placement", s), bt(e, {position: "absolute"}), n
                    }, gpuAcceleration: void 0
                }
            }
        }, Ot = function () {
            function t(e, n) {
                var i = this, r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                tt(this, t), this.scheduleUpdate = function () {
                    return requestAnimationFrame(i.update)
                }, this.update = U(this.update.bind(this)), this.options = it({}, t.Defaults, r), this.state = {
                    isDestroyed: !1,
                    isCreated: !1,
                    scrollParents: []
                }, this.reference = e && e.jquery ? e[0] : e, this.popper = n && n.jquery ? n[0] : n, this.options.modifiers = {}, Object.keys(it({}, t.Defaults.modifiers, r.modifiers)).forEach(function (e) {
                    i.options.modifiers[e] = it({}, t.Defaults.modifiers[e] || {}, r.modifiers ? r.modifiers[e] : {})
                }), this.modifiers = Object.keys(this.options.modifiers).map(function (t) {
                    return it({name: t}, i.options.modifiers[t])
                }).sort(function (t, e) {
                    return t.order - e.order
                }), this.modifiers.forEach(function (t) {
                    t.enabled && B(t.onLoad) && t.onLoad(i.reference, i.popper, i.options, t, i.state)
                }), this.update();
                var o = this.options.eventsEnabled;
                o && this.enableEventListeners(), this.state.eventsEnabled = o
            }

            return et(t, [{
                key: "update", value: function () {
                    return function () {
                        if (!this.state.isDestroyed) {
                            var t = {
                                instance: this,
                                styles: {},
                                arrowStyles: {},
                                attributes: {},
                                flipped: !1,
                                offsets: {}
                            };
                            t.offsets.reference = ct(this.state, this.popper, this.reference), t.placement = lt(this.options.placement, t.offsets.reference, this.popper, this.reference, this.options.modifiers.flip.boundariesElement, this.options.modifiers.flip.padding), t.originalPlacement = t.placement, t.offsets.popper = ut(this.popper, t.offsets.reference, t.placement), t.offsets.popper.position = "absolute", t = pt(this.modifiers, t), this.state.isCreated ? this.options.onUpdate(t) : (this.state.isCreated = !0, this.options.onCreate(t))
                        }
                    }.call(this)
                }
            }, {
                key: "destroy", value: function () {
                    return function () {
                        return this.state.isDestroyed = !0, gt(this.modifiers, "applyStyle") && (this.popper.removeAttribute("x-placement"), this.popper.style.left = "", this.popper.style.position = "", this.popper.style.top = "", this.popper.style[mt("transform")] = ""), this.disableEventListeners(), this.options.removeOnDestroy && this.popper.parentNode.removeChild(this.popper), this
                    }.call(this)
                }
            }, {
                key: "enableEventListeners", value: function () {
                    return function () {
                        this.state.eventsEnabled || (this.state = vt(this.reference, this.options, this.state, this.scheduleUpdate))
                    }.call(this)
                }
            }, {
                key: "disableEventListeners", value: function () {
                    return Et.call(this)
                }
            }]), t
        }();
        Ot.Utils = ("undefined" != typeof window ? window : global).PopperUtils, Ot.placements = Ct, Ot.Defaults = St;
        var Nt = function (t) {
            var e = "dropdown", n = "bs.dropdown", o = "." + n, s = t.fn[e], a = new RegExp("38|40|27"), l = {
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    CLICK: "click" + o,
                    CLICK_DATA_API: "click" + o + ".data-api",
                    KEYDOWN_DATA_API: "keydown" + o + ".data-api",
                    KEYUP_DATA_API: "keyup" + o + ".data-api"
                }, c = "disabled", h = "show", f = "dropup", u = "dropright", d = "dropleft", p = "dropdown-menu-right",
                g = "dropdown-menu-left", m = "position-static", _ = '[data-toggle="dropdown"]', v = ".dropdown form",
                E = ".dropdown-menu", y = ".navbar-nav", b = ".dropdown-menu .dropdown-item:not(.disabled)",
                T = "top-start", C = "top-end", w = "bottom-start", I = "bottom-end", A = "right-start",
                D = "left-start", S = {offset: 0, flip: !0, boundary: "scrollParent"},
                O = {offset: "(number|string|function)", flip: "boolean", boundary: "(string|element)"},
                N = function () {
                    function s(t, e) {
                        this._element = t, this._popper = null, this._config = this._getConfig(e), this._menu = this._getMenuElement(), this._inNavbar = this._detectNavbar(), this._addEventListeners()
                    }

                    var v = s.prototype;
                    return v.toggle = function () {
                        if (!this._element.disabled && !t(this._element).hasClass(c)) {
                            var e = s._getParentFromElement(this._element), n = t(this._menu).hasClass(h);
                            if (s._clearMenus(), !n) {
                                var i = {relatedTarget: this._element}, r = t.Event(l.SHOW, i);
                                if (t(e).trigger(r), !r.isDefaultPrevented()) {
                                    if (!this._inNavbar) {
                                        if ("undefined" == typeof Ot) throw new TypeError("Bootstrap dropdown require Popper.js (https://popper.js.org)");
                                        var o = this._element;
                                        t(e).hasClass(f) && (t(this._menu).hasClass(g) || t(this._menu).hasClass(p)) && (o = e), "scrollParent" !== this._config.boundary && t(e).addClass(m), this._popper = new Ot(o, this._menu, this._getPopperConfig())
                                    }
                                    "ontouchstart" in document.documentElement && 0 === t(e).closest(y).length && t("body").children().on("mouseover", null, t.noop), this._element.focus(), this._element.setAttribute("aria-expanded", !0), t(this._menu).toggleClass(h), t(e).toggleClass(h).trigger(t.Event(l.SHOWN, i))
                                }
                            }
                        }
                    }, v.dispose = function () {
                        t.removeData(this._element, n), t(this._element).off(o), this._element = null, this._menu = null, null !== this._popper && (this._popper.destroy(), this._popper = null)
                    }, v.update = function () {
                        this._inNavbar = this._detectNavbar(), null !== this._popper && this._popper.scheduleUpdate()
                    }, v._addEventListeners = function () {
                        var e = this;
                        t(this._element).on(l.CLICK, function (t) {
                            t.preventDefault(), t.stopPropagation(), e.toggle()
                        })
                    }, v._getConfig = function (n) {
                        return n = r({}, this.constructor.Default, t(this._element).data(), n), k.typeCheckConfig(e, n, this.constructor.DefaultType), n
                    }, v._getMenuElement = function () {
                        if (!this._menu) {
                            var e = s._getParentFromElement(this._element);
                            this._menu = t(e).find(E)[0]
                        }
                        return this._menu
                    }, v._getPlacement = function () {
                        var e = t(this._element).parent(), n = w;
                        return e.hasClass(f) ? (n = T, t(this._menu).hasClass(p) && (n = C)) : e.hasClass(u) ? n = A : e.hasClass(d) ? n = D : t(this._menu).hasClass(p) && (n = I), n
                    }, v._detectNavbar = function () {
                        return t(this._element).closest(".navbar").length > 0
                    }, v._getPopperConfig = function () {
                        var t = this, e = {};
                        return "function" == typeof this._config.offset ? e.fn = function (e) {
                            return e.offsets = r({}, e.offsets, t._config.offset(e.offsets) || {}), e
                        } : e.offset = this._config.offset, {
                            placement: this._getPlacement(),
                            modifiers: {
                                offset: e,
                                flip: {enabled: this._config.flip},
                                preventOverflow: {boundariesElement: this._config.boundary}
                            }
                        }
                    }, s._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n);
                            if (i || (i = new s(this, "object" == typeof e ? e : null), t(this).data(n, i)), "string" == typeof e) {
                                if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        })
                    }, s._clearMenus = function (e) {
                        if (!e || 3 !== e.which && ("keyup" !== e.type || 9 === e.which)) for (var i = t.makeArray(t(_)), r = 0; r < i.length; r++) {
                            var o = s._getParentFromElement(i[r]), a = t(i[r]).data(n), c = {relatedTarget: i[r]};
                            if (a) {
                                var f = a._menu;
                                if (t(o).hasClass(h) && !(e && ("click" === e.type && /input|textarea/i.test(e.target.tagName) || "keyup" === e.type && 9 === e.which) && t.contains(o, e.target))) {
                                    var u = t.Event(l.HIDE, c);
                                    t(o).trigger(u), u.isDefaultPrevented() || ("ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop), i[r].setAttribute("aria-expanded", "false"), t(f).removeClass(h), t(o).removeClass(h).trigger(t.Event(l.HIDDEN, c)))
                                }
                            }
                        }
                    }, s._getParentFromElement = function (e) {
                        var n, i = k.getSelectorFromElement(e);
                        return i && (n = t(i)[0]), n || e.parentNode
                    }, s._dataApiKeydownHandler = function (e) {
                        if ((/input|textarea/i.test(e.target.tagName) ? !(32 === e.which || 27 !== e.which && (40 !== e.which && 38 !== e.which || t(e.target).closest(E).length)) : a.test(e.which)) && (e.preventDefault(), e.stopPropagation(), !this.disabled && !t(this).hasClass(c))) {
                            var n = s._getParentFromElement(this), i = t(n).hasClass(h);
                            if ((i || 27 === e.which && 32 === e.which) && (!i || 27 !== e.which && 32 !== e.which)) {
                                var r = t(n).find(b).get();
                                if (0 !== r.length) {
                                    var o = r.indexOf(e.target);
                                    38 === e.which && o > 0 && o--, 40 === e.which && o < r.length - 1 && o++, o < 0 && (o = 0), r[o].focus()
                                }
                            } else {
                                if (27 === e.which) {
                                    var l = t(n).find(_)[0];
                                    t(l).trigger("focus")
                                }
                                t(this).trigger("click")
                            }
                        }
                    }, i(s, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return S
                        }
                    }, {
                        key: "DefaultType", get: function () {
                            return O
                        }
                    }]), s
                }();
            return t(document).on(l.KEYDOWN_DATA_API, _, N._dataApiKeydownHandler).on(l.KEYDOWN_DATA_API, E, N._dataApiKeydownHandler).on(l.CLICK_DATA_API + " " + l.KEYUP_DATA_API, N._clearMenus).on(l.CLICK_DATA_API, _, function (e) {
                e.preventDefault(), e.stopPropagation(), N._jQueryInterface.call(t(this), "toggle")
            }).on(l.CLICK_DATA_API, v, function (t) {
                t.stopPropagation()
            }), t.fn[e] = N._jQueryInterface, t.fn[e].Constructor = N, t.fn[e].noConflict = function () {
                return t.fn[e] = s, N._jQueryInterface
            }, N
        }(e), kt = function (t) {
            var e = "bs.modal", n = "." + e, o = t.fn.modal, s = {backdrop: !0, keyboard: !0, focus: !0, show: !0},
                a = {backdrop: "(boolean|string)", keyboard: "boolean", focus: "boolean", show: "boolean"}, l = {
                    HIDE: "hide" + n,
                    HIDDEN: "hidden" + n,
                    SHOW: "show" + n,
                    SHOWN: "shown" + n,
                    FOCUSIN: "focusin" + n,
                    RESIZE: "resize" + n,
                    CLICK_DISMISS: "click.dismiss" + n,
                    KEYDOWN_DISMISS: "keydown.dismiss" + n,
                    MOUSEUP_DISMISS: "mouseup.dismiss" + n,
                    MOUSEDOWN_DISMISS: "mousedown.dismiss" + n,
                    CLICK_DATA_API: "click.bs.modal.data-api"
                }, c = "modal-scrollbar-measure", h = "modal-backdrop", f = "modal-open", u = "fade", d = "show", p = {
                    DIALOG: ".modal-dialog",
                    DATA_TOGGLE: '[data-toggle="modal"]',
                    DATA_DISMISS: '[data-dismiss="modal"]',
                    FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
                    STICKY_CONTENT: ".sticky-top",
                    NAVBAR_TOGGLER: ".navbar-toggler"
                }, g = function () {
                    function o(e, n) {
                        this._config = this._getConfig(n), this._element = e, this._dialog = t(e).find(p.DIALOG)[0], this._backdrop = null, this._isShown = !1, this._isBodyOverflowing = !1, this._ignoreBackdropClick = !1, this._originalBodyPadding = 0, this._scrollbarWidth = 0
                    }

                    var g = o.prototype;
                    return g.toggle = function (t) {
                        return this._isShown ? this.hide() : this.show(t)
                    }, g.show = function (e) {
                        var n = this;
                        if (!this._isTransitioning && !this._isShown) {
                            k.supportsTransitionEnd() && t(this._element).hasClass(u) && (this._isTransitioning = !0);
                            var i = t.Event(l.SHOW, {relatedTarget: e});
                            t(this._element).trigger(i), this._isShown || i.isDefaultPrevented() || (this._isShown = !0, this._checkScrollbar(), this._setScrollbar(), this._adjustDialog(), t(document.body).addClass(f), this._setEscapeEvent(), this._setResizeEvent(), t(this._element).on(l.CLICK_DISMISS, p.DATA_DISMISS, function (t) {
                                return n.hide(t)
                            }), t(this._dialog).on(l.MOUSEDOWN_DISMISS, function () {
                                t(n._element).one(l.MOUSEUP_DISMISS, function (e) {
                                    t(e.target).is(n._element) && (n._ignoreBackdropClick = !0)
                                })
                            }), this._showBackdrop(function () {
                                return n._showElement(e)
                            }))
                        }
                    }, g.hide = function (e) {
                        var n = this;
                        if (e && e.preventDefault(), !this._isTransitioning && this._isShown) {
                            var i = t.Event(l.HIDE);
                            if (t(this._element).trigger(i), this._isShown && !i.isDefaultPrevented()) {
                                this._isShown = !1;
                                var r = k.supportsTransitionEnd() && t(this._element).hasClass(u);
                                r && (this._isTransitioning = !0), this._setEscapeEvent(), this._setResizeEvent(), t(document).off(l.FOCUSIN), t(this._element).removeClass(d), t(this._element).off(l.CLICK_DISMISS), t(this._dialog).off(l.MOUSEDOWN_DISMISS), r ? t(this._element).one(k.TRANSITION_END, function (t) {
                                    return n._hideModal(t)
                                }).emulateTransitionEnd(300) : this._hideModal()
                            }
                        }
                    }, g.dispose = function () {
                        t.removeData(this._element, e), t(window, document, this._element, this._backdrop).off(n), this._config = null, this._element = null, this._dialog = null, this._backdrop = null, this._isShown = null, this._isBodyOverflowing = null, this._ignoreBackdropClick = null, this._scrollbarWidth = null
                    }, g.handleUpdate = function () {
                        this._adjustDialog()
                    }, g._getConfig = function (t) {
                        return t = r({}, s, t), k.typeCheckConfig("modal", t, a), t
                    }, g._showElement = function (e) {
                        var n = this, i = k.supportsTransitionEnd() && t(this._element).hasClass(u);
                        this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE || document.body.appendChild(this._element), this._element.style.display = "block", this._element.removeAttribute("aria-hidden"), this._element.scrollTop = 0, i && k.reflow(this._element), t(this._element).addClass(d), this._config.focus && this._enforceFocus();
                        var r = t.Event(l.SHOWN, {relatedTarget: e}), o = function () {
                            n._config.focus && n._element.focus(), n._isTransitioning = !1, t(n._element).trigger(r)
                        };
                        i ? t(this._dialog).one(k.TRANSITION_END, o).emulateTransitionEnd(300) : o()
                    }, g._enforceFocus = function () {
                        var e = this;
                        t(document).off(l.FOCUSIN).on(l.FOCUSIN, function (n) {
                            document !== n.target && e._element !== n.target && 0 === t(e._element).has(n.target).length && e._element.focus()
                        })
                    }, g._setEscapeEvent = function () {
                        var e = this;
                        this._isShown && this._config.keyboard ? t(this._element).on(l.KEYDOWN_DISMISS, function (t) {
                            27 === t.which && (t.preventDefault(), e.hide())
                        }) : this._isShown || t(this._element).off(l.KEYDOWN_DISMISS)
                    }, g._setResizeEvent = function () {
                        var e = this;
                        this._isShown ? t(window).on(l.RESIZE, function (t) {
                            return e.handleUpdate(t)
                        }) : t(window).off(l.RESIZE)
                    }, g._hideModal = function () {
                        var e = this;
                        this._element.style.display = "none", this._element.setAttribute("aria-hidden", !0), this._isTransitioning = !1, this._showBackdrop(function () {
                            t(document.body).removeClass(f), e._resetAdjustments(), e._resetScrollbar(), t(e._element).trigger(l.HIDDEN)
                        })
                    }, g._removeBackdrop = function () {
                        this._backdrop && (t(this._backdrop).remove(), this._backdrop = null)
                    }, g._showBackdrop = function (e) {
                        var n = this, i = t(this._element).hasClass(u) ? u : "";
                        if (this._isShown && this._config.backdrop) {
                            var r = k.supportsTransitionEnd() && i;
                            if (this._backdrop = document.createElement("div"), this._backdrop.className = h, i && t(this._backdrop).addClass(i), t(this._backdrop).appendTo(document.body), t(this._element).on(l.CLICK_DISMISS, function (t) {
                                    n._ignoreBackdropClick ? n._ignoreBackdropClick = !1 : t.target === t.currentTarget && ("static" === n._config.backdrop ? n._element.focus() : n.hide())
                                }), r && k.reflow(this._backdrop), t(this._backdrop).addClass(d), !e) return;
                            if (!r) return void e();
                            t(this._backdrop).one(k.TRANSITION_END, e).emulateTransitionEnd(150)
                        } else if (!this._isShown && this._backdrop) {
                            t(this._backdrop).removeClass(d);
                            var o = function () {
                                n._removeBackdrop(), e && e()
                            };
                            k.supportsTransitionEnd() && t(this._element).hasClass(u) ? t(this._backdrop).one(k.TRANSITION_END, o).emulateTransitionEnd(150) : o()
                        } else e && e()
                    }, g._adjustDialog = function () {
                        var t = this._element.scrollHeight > document.documentElement.clientHeight;
                        !this._isBodyOverflowing && t && (this._element.style.paddingLeft = this._scrollbarWidth + "px"), this._isBodyOverflowing && !t && (this._element.style.paddingRight = this._scrollbarWidth + "px")
                    }, g._resetAdjustments = function () {
                        this._element.style.paddingLeft = "", this._element.style.paddingRight = ""
                    }, g._checkScrollbar = function () {
                        var t = document.body.getBoundingClientRect();
                        this._isBodyOverflowing = t.left + t.right < window.innerWidth, this._scrollbarWidth = this._getScrollbarWidth()
                    }, g._setScrollbar = function () {
                        var e = this;
                        if (this._isBodyOverflowing) {
                            t(p.FIXED_CONTENT).each(function (n, i) {
                                var r = t(i)[0].style.paddingRight, o = t(i).css("padding-right");
                                t(i).data("padding-right", r).css("padding-right", parseFloat(o) + e._scrollbarWidth + "px")
                            }), t(p.STICKY_CONTENT).each(function (n, i) {
                                var r = t(i)[0].style.marginRight, o = t(i).css("margin-right");
                                t(i).data("margin-right", r).css("margin-right", parseFloat(o) - e._scrollbarWidth + "px")
                            }), t(p.NAVBAR_TOGGLER).each(function (n, i) {
                                var r = t(i)[0].style.marginRight, o = t(i).css("margin-right");
                                t(i).data("margin-right", r).css("margin-right", parseFloat(o) + e._scrollbarWidth + "px")
                            });
                            var n = document.body.style.paddingRight, i = t("body").css("padding-right");
                            t("body").data("padding-right", n).css("padding-right", parseFloat(i) + this._scrollbarWidth + "px")
                        }
                    }, g._resetScrollbar = function () {
                        t(p.FIXED_CONTENT).each(function (e, n) {
                            var i = t(n).data("padding-right");
                            "undefined" != typeof i && t(n).css("padding-right", i).removeData("padding-right")
                        }), t(p.STICKY_CONTENT + ", " + p.NAVBAR_TOGGLER).each(function (e, n) {
                            var i = t(n).data("margin-right");
                            "undefined" != typeof i && t(n).css("margin-right", i).removeData("margin-right")
                        });
                        var e = t("body").data("padding-right");
                        "undefined" != typeof e && t("body").css("padding-right", e).removeData("padding-right")
                    }, g._getScrollbarWidth = function () {
                        var t = document.createElement("div");
                        t.className = c, document.body.appendChild(t);
                        var e = t.getBoundingClientRect().width - t.clientWidth;
                        return document.body.removeChild(t), e
                    }, o._jQueryInterface = function (n, i) {
                        return this.each(function () {
                            var s = t(this).data(e), a = r({}, o.Default, t(this).data(), "object" == typeof n && n);
                            if (s || (s = new o(this, a), t(this).data(e, s)), "string" == typeof n) {
                                if ("undefined" == typeof s[n]) throw new TypeError('No method named "' + n + '"');
                                s[n](i)
                            } else a.show && s.show(i)
                        })
                    }, i(o, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return s
                        }
                    }]), o
                }();
            return t(document).on(l.CLICK_DATA_API, p.DATA_TOGGLE, function (n) {
                var i, o = this, s = k.getSelectorFromElement(this);
                s && (i = t(s)[0]);
                var a = t(i).data(e) ? "toggle" : r({}, t(i).data(), t(this).data());
                "A" !== this.tagName && "AREA" !== this.tagName || n.preventDefault();
                var c = t(i).one(l.SHOW, function (e) {
                    e.isDefaultPrevented() || c.one(l.HIDDEN, function () {
                        t(o).is(":visible") && o.focus()
                    })
                });
                g._jQueryInterface.call(t(i), a, this)
            }), t.fn.modal = g._jQueryInterface, t.fn.modal.Constructor = g, t.fn.modal.noConflict = function () {
                return t.fn.modal = o, g._jQueryInterface
            }, g
        }(e), Lt = function (t) {
            var e = "tooltip", n = "bs.tooltip", o = "." + n, s = t.fn[e], a = new RegExp("(^|\\s)bs-tooltip\\S+", "g"),
                l = {
                    animation: "boolean",
                    template: "string",
                    title: "(string|element|function)",
                    trigger: "string",
                    delay: "(number|object)",
                    html: "boolean",
                    selector: "(string|boolean)",
                    placement: "(string|function)",
                    offset: "(number|string)",
                    container: "(string|element|boolean)",
                    fallbackPlacement: "(string|array)",
                    boundary: "(string|element)"
                }, c = {AUTO: "auto", TOP: "top", RIGHT: "right", BOTTOM: "bottom", LEFT: "left"}, h = {
                    animation: !0,
                    template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
                    trigger: "hover focus",
                    title: "",
                    delay: 0,
                    html: !1,
                    selector: !1,
                    placement: "top",
                    offset: 0,
                    container: !1,
                    fallbackPlacement: "flip",
                    boundary: "scrollParent"
                }, f = "show", u = "out", d = {
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    INSERTED: "inserted" + o,
                    CLICK: "click" + o,
                    FOCUSIN: "focusin" + o,
                    FOCUSOUT: "focusout" + o,
                    MOUSEENTER: "mouseenter" + o,
                    MOUSELEAVE: "mouseleave" + o
                }, p = "fade", g = "show", m = ".tooltip-inner", _ = ".arrow", v = "hover", E = "focus", y = "click",
                b = "manual", T = function () {
                    function s(t, e) {
                        if ("undefined" == typeof Ot) throw new TypeError("Bootstrap tooltips require Popper.js (https://popper.js.org)");
                        this._isEnabled = !0, this._timeout = 0, this._hoverState = "", this._activeTrigger = {}, this._popper = null, this.element = t, this.config = this._getConfig(e), this.tip = null, this._setListeners()
                    }

                    var T = s.prototype;
                    return T.enable = function () {
                        this._isEnabled = !0
                    }, T.disable = function () {
                        this._isEnabled = !1
                    }, T.toggleEnabled = function () {
                        this._isEnabled = !this._isEnabled
                    }, T.toggle = function (e) {
                        if (this._isEnabled) if (e) {
                            var n = this.constructor.DATA_KEY, i = t(e.currentTarget).data(n);
                            i || (i = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(n, i)), i._activeTrigger.click = !i._activeTrigger.click, i._isWithActiveTrigger() ? i._enter(null, i) : i._leave(null, i)
                        } else {
                            if (t(this.getTipElement()).hasClass(g)) return void this._leave(null, this);
                            this._enter(null, this)
                        }
                    }, T.dispose = function () {
                        clearTimeout(this._timeout), t.removeData(this.element, this.constructor.DATA_KEY), t(this.element).off(this.constructor.EVENT_KEY), t(this.element).closest(".modal").off("hide.bs.modal"), this.tip && t(this.tip).remove(), this._isEnabled = null, this._timeout = null, this._hoverState = null, this._activeTrigger = null, null !== this._popper && this._popper.destroy(), this._popper = null, this.element = null, this.config = null, this.tip = null
                    }, T.show = function () {
                        var e = this;
                        if ("none" === t(this.element).css("display")) throw new Error("Please use show on visible elements");
                        var n = t.Event(this.constructor.Event.SHOW);
                        if (this.isWithContent() && this._isEnabled) {
                            t(this.element).trigger(n);
                            var i = t.contains(this.element.ownerDocument.documentElement, this.element);
                            if (n.isDefaultPrevented() || !i) return;
                            var r = this.getTipElement(), o = k.getUID(this.constructor.NAME);
                            r.setAttribute("id", o), this.element.setAttribute("aria-describedby", o), this.setContent(), this.config.animation && t(r).addClass(p);
                            var a = "function" == typeof this.config.placement ? this.config.placement.call(this, r, this.element) : this.config.placement,
                                l = this._getAttachment(a);
                            this.addAttachmentClass(l);
                            var c = !1 === this.config.container ? document.body : t(this.config.container);
                            t(r).data(this.constructor.DATA_KEY, this), t.contains(this.element.ownerDocument.documentElement, this.tip) || t(r).appendTo(c), t(this.element).trigger(this.constructor.Event.INSERTED), this._popper = new Ot(this.element, r, {
                                placement: l,
                                modifiers: {
                                    offset: {offset: this.config.offset},
                                    flip: {behavior: this.config.fallbackPlacement},
                                    arrow: {element: _},
                                    preventOverflow: {boundariesElement: this.config.boundary}
                                },
                                onCreate: function (t) {
                                    t.originalPlacement !== t.placement && e._handlePopperPlacementChange(t)
                                },
                                onUpdate: function (t) {
                                    e._handlePopperPlacementChange(t)
                                }
                            }), t(r).addClass(g), "ontouchstart" in document.documentElement && t("body").children().on("mouseover", null, t.noop);
                            var h = function () {
                                e.config.animation && e._fixTransition();
                                var n = e._hoverState;
                                e._hoverState = null, t(e.element).trigger(e.constructor.Event.SHOWN), n === u && e._leave(null, e)
                            };
                            k.supportsTransitionEnd() && t(this.tip).hasClass(p) ? t(this.tip).one(k.TRANSITION_END, h).emulateTransitionEnd(s._TRANSITION_DURATION) : h()
                        }
                    }, T.hide = function (e) {
                        var n = this, i = this.getTipElement(), r = t.Event(this.constructor.Event.HIDE), o = function () {
                            n._hoverState !== f && i.parentNode && i.parentNode.removeChild(i), n._cleanTipClass(), n.element.removeAttribute("aria-describedby"), t(n.element).trigger(n.constructor.Event.HIDDEN), null !== n._popper && n._popper.destroy(), e && e()
                        };
                        t(this.element).trigger(r), r.isDefaultPrevented() || (t(i).removeClass(g), "ontouchstart" in document.documentElement && t("body").children().off("mouseover", null, t.noop), this._activeTrigger[y] = !1, this._activeTrigger[E] = !1, this._activeTrigger[v] = !1, k.supportsTransitionEnd() && t(this.tip).hasClass(p) ? t(i).one(k.TRANSITION_END, o).emulateTransitionEnd(150) : o(), this._hoverState = "")
                    }, T.update = function () {
                        null !== this._popper && this._popper.scheduleUpdate()
                    }, T.isWithContent = function () {
                        return Boolean(this.getTitle())
                    }, T.addAttachmentClass = function (e) {
                        t(this.getTipElement()).addClass("bs-tooltip-" + e)
                    }, T.getTipElement = function () {
                        return this.tip = this.tip || t(this.config.template)[0], this.tip
                    }, T.setContent = function () {
                        var e = t(this.getTipElement());
                        this.setElementContent(e.find(m), this.getTitle()), e.removeClass(p + " " + g)
                    }, T.setElementContent = function (e, n) {
                        var i = this.config.html;
                        "object" == typeof n && (n.nodeType || n.jquery) ? i ? t(n).parent().is(e) || e.empty().append(n) : e.text(t(n).text()) : e[i ? "html" : "text"](n)
                    }, T.getTitle = function () {
                        var t = this.element.getAttribute("data-original-title");
                        return t || (t = "function" == typeof this.config.title ? this.config.title.call(this.element) : this.config.title), t
                    }, T._getAttachment = function (t) {
                        return c[t.toUpperCase()]
                    }, T._setListeners = function () {
                        var e = this;
                        this.config.trigger.split(" ").forEach(function (n) {
                            if ("click" === n) t(e.element).on(e.constructor.Event.CLICK, e.config.selector, function (t) {
                                return e.toggle(t)
                            }); else if (n !== b) {
                                var i = n === v ? e.constructor.Event.MOUSEENTER : e.constructor.Event.FOCUSIN,
                                    r = n === v ? e.constructor.Event.MOUSELEAVE : e.constructor.Event.FOCUSOUT;
                                t(e.element).on(i, e.config.selector, function (t) {
                                    return e._enter(t)
                                }).on(r, e.config.selector, function (t) {
                                    return e._leave(t)
                                })
                            }
                            t(e.element).closest(".modal").on("hide.bs.modal", function () {
                                return e.hide()
                            })
                        }), this.config.selector ? this.config = r({}, this.config, {
                            trigger: "manual",
                            selector: ""
                        }) : this._fixTitle()
                    }, T._fixTitle = function () {
                        var t = typeof this.element.getAttribute("data-original-title");
                        (this.element.getAttribute("title") || "string" !== t) && (this.element.setAttribute("data-original-title", this.element.getAttribute("title") || ""), this.element.setAttribute("title", ""))
                    }, T._enter = function (e, n) {
                        var i = this.constructor.DATA_KEY;
                        (n = n || t(e.currentTarget).data(i)) || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusin" === e.type ? E : v] = !0), t(n.getTipElement()).hasClass(g) || n._hoverState === f ? n._hoverState = f : (clearTimeout(n._timeout), n._hoverState = f, n.config.delay && n.config.delay.show ? n._timeout = setTimeout(function () {
                            n._hoverState === f && n.show()
                        }, n.config.delay.show) : n.show())
                    }, T._leave = function (e, n) {
                        var i = this.constructor.DATA_KEY;
                        (n = n || t(e.currentTarget).data(i)) || (n = new this.constructor(e.currentTarget, this._getDelegateConfig()), t(e.currentTarget).data(i, n)), e && (n._activeTrigger["focusout" === e.type ? E : v] = !1), n._isWithActiveTrigger() || (clearTimeout(n._timeout), n._hoverState = u, n.config.delay && n.config.delay.hide ? n._timeout = setTimeout(function () {
                            n._hoverState === u && n.hide()
                        }, n.config.delay.hide) : n.hide())
                    }, T._isWithActiveTrigger = function () {
                        for (var t in this._activeTrigger) if (this._activeTrigger[t]) return !0;
                        return !1
                    }, T._getConfig = function (n) {
                        return "number" == typeof(n = r({}, this.constructor.Default, t(this.element).data(), n)).delay && (n.delay = {
                            show: n.delay,
                            hide: n.delay
                        }), "number" == typeof n.title && (n.title = n.title.toString()), "number" == typeof n.content && (n.content = n.content.toString()), k.typeCheckConfig(e, n, this.constructor.DefaultType), n
                    }, T._getDelegateConfig = function () {
                        var t = {};
                        if (this.config) for (var e in this.config) this.constructor.Default[e] !== this.config[e] && (t[e] = this.config[e]);
                        return t
                    }, T._cleanTipClass = function () {
                        var e = t(this.getTipElement()), n = e.attr("class").match(a);
                        null !== n && n.length > 0 && e.removeClass(n.join(""))
                    }, T._handlePopperPlacementChange = function (t) {
                        this._cleanTipClass(), this.addAttachmentClass(this._getAttachment(t.placement))
                    }, T._fixTransition = function () {
                        var e = this.getTipElement(), n = this.config.animation;
                        null === e.getAttribute("x-placement") && (t(e).removeClass(p), this.config.animation = !1, this.hide(), this.show(), this.config.animation = n)
                    }, s._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n), r = "object" == typeof e && e;
                            if ((i || !/dispose|hide/.test(e)) && (i || (i = new s(this, r), t(this).data(n, i)), "string" == typeof e)) {
                                if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        })
                    }, i(s, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return h
                        }
                    }, {
                        key: "NAME", get: function () {
                            return e
                        }
                    }, {
                        key: "DATA_KEY", get: function () {
                            return n
                        }
                    }, {
                        key: "Event", get: function () {
                            return d
                        }
                    }, {
                        key: "EVENT_KEY", get: function () {
                            return o
                        }
                    }, {
                        key: "DefaultType", get: function () {
                            return l
                        }
                    }]), s
                }();
            return t.fn[e] = T._jQueryInterface, t.fn[e].Constructor = T, t.fn[e].noConflict = function () {
                return t.fn[e] = s, T._jQueryInterface
            }, T
        }(e), Pt = function (t) {
            var e = "popover", n = "bs.popover", o = "." + n, s = t.fn[e], a = new RegExp("(^|\\s)bs-popover\\S+", "g"),
                l = r({}, Lt.Default, {
                    placement: "right",
                    trigger: "click",
                    content: "",
                    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
                }), c = r({}, Lt.DefaultType, {content: "(string|element|function)"}), h = "fade", f = "show",
                u = ".popover-header", d = ".popover-body", p = {
                    HIDE: "hide" + o,
                    HIDDEN: "hidden" + o,
                    SHOW: "show" + o,
                    SHOWN: "shown" + o,
                    INSERTED: "inserted" + o,
                    CLICK: "click" + o,
                    FOCUSIN: "focusin" + o,
                    FOCUSOUT: "focusout" + o,
                    MOUSEENTER: "mouseenter" + o,
                    MOUSELEAVE: "mouseleave" + o
                }, g = function (r) {
                    var s, g;

                    function m() {
                        return r.apply(this, arguments) || this
                    }

                    g = r, (s = m).prototype = Object.create(g.prototype), s.prototype.constructor = s, s.__proto__ = g;
                    var _ = m.prototype;
                    return _.isWithContent = function () {
                        return this.getTitle() || this._getContent()
                    }, _.addAttachmentClass = function (e) {
                        t(this.getTipElement()).addClass("bs-popover-" + e)
                    }, _.getTipElement = function () {
                        return this.tip = this.tip || t(this.config.template)[0], this.tip
                    }, _.setContent = function () {
                        var e = t(this.getTipElement());
                        this.setElementContent(e.find(u), this.getTitle());
                        var n = this._getContent();
                        "function" == typeof n && (n = n.call(this.element)), this.setElementContent(e.find(d), n), e.removeClass(h + " " + f)
                    }, _._getContent = function () {
                        return this.element.getAttribute("data-content") || this.config.content
                    }, _._cleanTipClass = function () {
                        var e = t(this.getTipElement()), n = e.attr("class").match(a);
                        null !== n && n.length > 0 && e.removeClass(n.join(""))
                    }, m._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n), r = "object" == typeof e ? e : null;
                            if ((i || !/destroy|hide/.test(e)) && (i || (i = new m(this, r), t(this).data(n, i)), "string" == typeof e)) {
                                if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        })
                    }, i(m, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return l
                        }
                    }, {
                        key: "NAME", get: function () {
                            return e
                        }
                    }, {
                        key: "DATA_KEY", get: function () {
                            return n
                        }
                    }, {
                        key: "Event", get: function () {
                            return p
                        }
                    }, {
                        key: "EVENT_KEY", get: function () {
                            return o
                        }
                    }, {
                        key: "DefaultType", get: function () {
                            return c
                        }
                    }]), m
                }(Lt);
            return t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function () {
                return t.fn[e] = s, g._jQueryInterface
            }, g
        }(e), xt = function (t) {
            var e = "scrollspy", n = "bs.scrollspy", o = "." + n, s = t.fn[e],
                a = {offset: 10, method: "auto", target: ""},
                l = {offset: "number", method: "string", target: "(string|element)"},
                c = {ACTIVATE: "activate" + o, SCROLL: "scroll" + o, LOAD_DATA_API: "load" + o + ".data-api"},
                h = "dropdown-item", f = "active", u = {
                    DATA_SPY: '[data-spy="scroll"]',
                    ACTIVE: ".active",
                    NAV_LIST_GROUP: ".nav, .list-group",
                    NAV_LINKS: ".nav-link",
                    NAV_ITEMS: ".nav-item",
                    LIST_ITEMS: ".list-group-item",
                    DROPDOWN: ".dropdown",
                    DROPDOWN_ITEMS: ".dropdown-item",
                    DROPDOWN_TOGGLE: ".dropdown-toggle"
                }, d = "offset", p = "position", g = function () {
                    function s(e, n) {
                        var i = this;
                        this._element = e, this._scrollElement = "BODY" === e.tagName ? window : e, this._config = this._getConfig(n), this._selector = this._config.target + " " + u.NAV_LINKS + "," + this._config.target + " " + u.LIST_ITEMS + "," + this._config.target + " " + u.DROPDOWN_ITEMS, this._offsets = [], this._targets = [], this._activeTarget = null, this._scrollHeight = 0, t(this._scrollElement).on(c.SCROLL, function (t) {
                            return i._process(t)
                        }), this.refresh(), this._process()
                    }

                    var g = s.prototype;
                    return g.refresh = function () {
                        var e = this, n = this._scrollElement === this._scrollElement.window ? d : p,
                            i = "auto" === this._config.method ? n : this._config.method,
                            r = i === p ? this._getScrollTop() : 0;
                        this._offsets = [], this._targets = [], this._scrollHeight = this._getScrollHeight(), t.makeArray(t(this._selector)).map(function (e) {
                            var n, o = k.getSelectorFromElement(e);
                            if (o && (n = t(o)[0]), n) {
                                var s = n.getBoundingClientRect();
                                if (s.width || s.height) return [t(n)[i]().top + r, o]
                            }
                            return null
                        }).filter(function (t) {
                            return t
                        }).sort(function (t, e) {
                            return t[0] - e[0]
                        }).forEach(function (t) {
                            e._offsets.push(t[0]), e._targets.push(t[1])
                        })
                    }, g.dispose = function () {
                        t.removeData(this._element, n), t(this._scrollElement).off(o), this._element = null, this._scrollElement = null, this._config = null, this._selector = null, this._offsets = null, this._targets = null, this._activeTarget = null, this._scrollHeight = null
                    }, g._getConfig = function (n) {
                        if ("string" != typeof(n = r({}, a, n)).target) {
                            var i = t(n.target).attr("id");
                            i || (i = k.getUID(e), t(n.target).attr("id", i)), n.target = "#" + i
                        }
                        return k.typeCheckConfig(e, n, l), n
                    }, g._getScrollTop = function () {
                        return this._scrollElement === window ? this._scrollElement.pageYOffset : this._scrollElement.scrollTop
                    }, g._getScrollHeight = function () {
                        return this._scrollElement.scrollHeight || Math.max(document.body.scrollHeight, document.documentElement.scrollHeight)
                    }, g._getOffsetHeight = function () {
                        return this._scrollElement === window ? window.innerHeight : this._scrollElement.getBoundingClientRect().height
                    }, g._process = function () {
                        var t = this._getScrollTop() + this._config.offset, e = this._getScrollHeight(),
                            n = this._config.offset + e - this._getOffsetHeight();
                        if (this._scrollHeight !== e && this.refresh(), t >= n) {
                            var i = this._targets[this._targets.length - 1];
                            this._activeTarget !== i && this._activate(i)
                        } else {
                            if (this._activeTarget && t < this._offsets[0] && this._offsets[0] > 0) return this._activeTarget = null, void this._clear();
                            for (var r = this._offsets.length; r--;) {
                                this._activeTarget !== this._targets[r] && t >= this._offsets[r] && ("undefined" == typeof this._offsets[r + 1] || t < this._offsets[r + 1]) && this._activate(this._targets[r])
                            }
                        }
                    }, g._activate = function (e) {
                        this._activeTarget = e, this._clear();
                        var n = this._selector.split(",");
                        n = n.map(function (t) {
                            return t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
                        });
                        var i = t(n.join(","));
                        i.hasClass(h) ? (i.closest(u.DROPDOWN).find(u.DROPDOWN_TOGGLE).addClass(f), i.addClass(f)) : (i.addClass(f), i.parents(u.NAV_LIST_GROUP).prev(u.NAV_LINKS + ", " + u.LIST_ITEMS).addClass(f), i.parents(u.NAV_LIST_GROUP).prev(u.NAV_ITEMS).children(u.NAV_LINKS).addClass(f)), t(this._scrollElement).trigger(c.ACTIVATE, {relatedTarget: e})
                    }, g._clear = function () {
                        t(this._selector).filter(u.ACTIVE).removeClass(f)
                    }, s._jQueryInterface = function (e) {
                        return this.each(function () {
                            var i = t(this).data(n);
                            if (i || (i = new s(this, "object" == typeof e && e), t(this).data(n, i)), "string" == typeof e) {
                                if ("undefined" == typeof i[e]) throw new TypeError('No method named "' + e + '"');
                                i[e]()
                            }
                        })
                    }, i(s, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }, {
                        key: "Default", get: function () {
                            return a
                        }
                    }]), s
                }();
            return t(window).on(c.LOAD_DATA_API, function () {
                for (var e = t.makeArray(t(u.DATA_SPY)), n = e.length; n--;) {
                    var i = t(e[n]);
                    g._jQueryInterface.call(i, i.data())
                }
            }), t.fn[e] = g._jQueryInterface, t.fn[e].Constructor = g, t.fn[e].noConflict = function () {
                return t.fn[e] = s, g._jQueryInterface
            }, g
        }(e), Rt = function (t) {
            var e = ".bs.tab", n = t.fn.tab, r = {
                    HIDE: "hide" + e,
                    HIDDEN: "hidden" + e,
                    SHOW: "show" + e,
                    SHOWN: "shown" + e,
                    CLICK_DATA_API: "click.bs.tab.data-api"
                }, o = "dropdown-menu", s = "active", a = "disabled", l = "fade", c = "show", h = ".dropdown",
                f = ".nav, .list-group", u = ".active", d = "> li > .active",
                p = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]', g = ".dropdown-toggle",
                m = "> .dropdown-menu .active", _ = function () {
                    function e(t) {
                        this._element = t
                    }

                    var n = e.prototype;
                    return n.show = function () {
                        var e = this;
                        if (!(this._element.parentNode && this._element.parentNode.nodeType === Node.ELEMENT_NODE && t(this._element).hasClass(s) || t(this._element).hasClass(a))) {
                            var n, i, o = t(this._element).closest(f)[0], l = k.getSelectorFromElement(this._element);
                            if (o) {
                                var c = "UL" === o.nodeName ? d : u;
                                i = (i = t.makeArray(t(o).find(c)))[i.length - 1]
                            }
                            var h = t.Event(r.HIDE, {relatedTarget: this._element}),
                                p = t.Event(r.SHOW, {relatedTarget: i});
                            if (i && t(i).trigger(h), t(this._element).trigger(p), !p.isDefaultPrevented() && !h.isDefaultPrevented()) {
                                l && (n = t(l)[0]), this._activate(this._element, o);
                                var g = function () {
                                    var n = t.Event(r.HIDDEN, {relatedTarget: e._element}),
                                        o = t.Event(r.SHOWN, {relatedTarget: i});
                                    t(i).trigger(n), t(e._element).trigger(o)
                                };
                                n ? this._activate(n, n.parentNode, g) : g()
                            }
                        }
                    }, n.dispose = function () {
                        t.removeData(this._element, "bs.tab"), this._element = null
                    }, n._activate = function (e, n, i) {
                        var r = this, o = ("UL" === n.nodeName ? t(n).find(d) : t(n).children(u))[0],
                            s = i && k.supportsTransitionEnd() && o && t(o).hasClass(l), a = function () {
                                return r._transitionComplete(e, o, i)
                            };
                        o && s ? t(o).one(k.TRANSITION_END, a).emulateTransitionEnd(150) : a()
                    }, n._transitionComplete = function (e, n, i) {
                        if (n) {
                            t(n).removeClass(c + " " + s);
                            var r = t(n.parentNode).find(m)[0];
                            r && t(r).removeClass(s), "tab" === n.getAttribute("role") && n.setAttribute("aria-selected", !1)
                        }
                        if (t(e).addClass(s), "tab" === e.getAttribute("role") && e.setAttribute("aria-selected", !0), k.reflow(e), t(e).addClass(c), e.parentNode && t(e.parentNode).hasClass(o)) {
                            var a = t(e).closest(h)[0];
                            a && t(a).find(g).addClass(s), e.setAttribute("aria-expanded", !0)
                        }
                        i && i()
                    }, e._jQueryInterface = function (n) {
                        return this.each(function () {
                            var i = t(this), r = i.data("bs.tab");
                            if (r || (r = new e(this), i.data("bs.tab", r)), "string" == typeof n) {
                                if ("undefined" == typeof r[n]) throw new TypeError('No method named "' + n + '"');
                                r[n]()
                            }
                        })
                    }, i(e, null, [{
                        key: "VERSION", get: function () {
                            return "4.0.0"
                        }
                    }]), e
                }();
            return t(document).on(r.CLICK_DATA_API, p, function (e) {
                e.preventDefault(), _._jQueryInterface.call(t(this), "show")
            }), t.fn.tab = _._jQueryInterface, t.fn.tab.Constructor = _, t.fn.tab.noConflict = function () {
                return t.fn.tab = n, _._jQueryInterface
            }, _
        }(e);
        !function (t) {
            if ("undefined" == typeof t) throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");
            var e = t.fn.jquery.split(" ")[0].split(".");
            if (e[0] < 2 && e[1] < 9 || 1 === e[0] && 9 === e[1] && e[2] < 1 || e[0] >= 4) throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")
        }(e), t.Util = k, t.Alert = L, t.Button = P, t.Carousel = x, t.Collapse = R, t.Dropdown = Nt, t.Modal = kt, t.Popover = Pt, t.Scrollspy = xt, t.Tab = Rt, t.Tooltip = Lt, Object.defineProperty(t, "__esModule", {value: !0})
    });
    //# sourceMappingURL=bootstrap.bundle.min.js.map
</script>
{{--</body>--}}
{{--</html>--}}
