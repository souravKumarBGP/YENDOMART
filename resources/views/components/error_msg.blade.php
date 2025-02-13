<style>
    .error_msg{
        border: .0625rem solid #de012a;
        position: fixed;
        top: 30%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 200;
        background: #de012a;
        padding: .8125rem;
        padding-right: 1.875rem;
        border-radius: .1875rem;
        box-shadow: 0px 0px .4375rem #ee0606c9;
        display: flex;
        align-items: center;
        .timer{
            position: absolute;
            top: .0625rem;
            right: .3125rem;
            & span{
                color: #eeededc7;
                font-size: 11px;
            }
        }
        & span{
            color: #f4f8fd;
            font-size: .8125rem;
        }
        & svg{
            width: 1.25rem;
            color: #fefcfb;
            margin-right: .625rem;
        }
    }
    @media all and (max-width: 576px){
        .error_msg{
            width: 90%;
        }
    }
</style>

<div class="error_msg">
    <div class="timer">
        <span>10s</span>
    </div>
    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
    </svg>                  
    <span>
        {{ $msg }}
    </span>
</div><!--./error_msg-->

<script>
    
    const timer = document.querySelector(".timer span");
    let time = 10;    
    let error_msg = document.querySelector(".error_msg");
    setInterval(() => {
        time = time -1;
        timer.innerText = time+"s";
        if(time == 0){
            time = 10;
            error_msg.style.display = "none";
        }
    }, 1000);
</script>