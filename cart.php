<!doctype html>

<div id="cart">
    <p class="cart-title left">Winkelmand</p>

    <div id="flip">
        <img src="images/icon-dropdown.svg" alt="Open mand" class="dropdown-icon">
    </div>
    <div id="panel">Hello World!</div>
</div>

<style type="text/css">
    #cart {
        position: fixed;
        top: -244px;
        right: 275px;
        height: 300px;
        width: 300px;
        border: 0;
        border-radius: 0 0 25px 25px;
        background-color: #fff;
        padding: 20px;
    }

    #flip {
        text-align: center;
        margin-top: -20px;
    }

    #panel {
        width: 300px;
        border-radius: 0 0 25px 25px;
        height: 200px;
        margin-top: -20px;
        background-color: #fff;

    }

    .dropdown-icon {
        width: 12px;
        height: 8px;
    }

    .cart-title {
        font-family: "Montserrat", sans-serif;
        font-weight: 600;
        font-size: 18px;
        color: #000;
        margin-top: 242px;
    }
</style>