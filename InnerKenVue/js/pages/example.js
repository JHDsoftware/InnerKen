$(document).ready(function () {
    initial();
});
function initial() {//本函数为页面创建时执行的函数，一般用于初始化页面等
    showHalloWorld();
}
/**
 * 函数的说明。函数分为三种，一种是处理特定事件的handler函数，一般命名为xxxHandler，比如，someButtonHandler，
 * 这种函数代表了某种事件发生时所需要的处理程序的集合。
 * 第二种是对于数据的处理函数。一般来说当某种事件发生时就意味着某些数据需要发生变化或其他东西需要变化，处理变化的函
 * 数被分类为处理函数。
 * 第三种则是对于某种ui的控制函数，比如某个组件的显示或隐藏等，或者根据某些数值更改一些显示之类的。这种函数被称为
 * Controler函数，也就是所谓的控制器。
 * 由这三种函数可以得知，我们处理一个业务逻辑的大体流程是，某种事件导致了某种结果，这种结果会被显示在某个地方。即
 * 由组件上注册的函数调用数据处理，在处理后调用ui函数显示处理的结果。
 * 一些常用的函数应该被记录在common.js中，这样我们可以反复利用该函数，而各个页面的本身则更多地是针对该页面的hand-
 * -ler函数和Controler函数。
 * */
function showHalloWorld() {
    let snackbarContainer = document.querySelector('#demo-snackbar-example');
    let showSnackbarButton = document.querySelector('#demo-show-snackbar');
    let handler = function (event) {
        showSnackbarButton.style.backgroundColor = '';
    };
    showSnackbarButton.addEventListener('click', function() {
        'use strict';
        showSnackbarButton.style.backgroundColor = '#' +
            Math.floor(Math.random() * 0xFFFFFF).toString(16);
        let data = {
            message: 'Button color changed.',
            timeout: 2000,
            actionHandler: handler,
            actionText: 'Undo'
        };
        snackbarContainer.MaterialSnackbar.showSnackbar(data);
    });
}