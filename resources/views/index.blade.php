<main>
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
      <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700" role="alert">
        <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">See what's new in <strong>onreels</strong></span>
        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
        </svg>
      </a>

      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
        Simplify Your Project Management Process
      </h1>

      <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
        With our powerful project management tools, you can streamline your workflow and focus on what matters most - delivering quality results to your clients.
      </p>

      <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <Link href="{{ route('projects.create') }}" slideover class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
          Create project
          <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </Link>

        <Link href="{{ route('dashboard') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
          <x-phosphor-squares-four-bold class="w-5 mr-2 -ml-1" />
          Show dashboard
        </Link>
      </div>

      <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
        <span class="font-semibold text-gray-400 uppercase">FEATURED IN</span>
        <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
          <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
            <svg class="h-8" viewBox="0 0 132 29" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M39.4555 5.17846C38.9976 3.47767 37.6566 2.13667 35.9558 1.67876C32.8486 0.828369 20.4198 0.828369 20.4198 0.828369C20.4198 0.828369 7.99099 0.828369 4.88379 1.64606C3.21571 2.10396 1.842 3.47767 1.38409 5.17846C0.566406 8.28567 0.566406 14.729 0.566406 14.729C0.566406 14.729 0.566406 21.2051 1.38409 24.2796C1.842 25.9804 3.183 27.3214 4.88379 27.7793C8.0237 28.6297 20.4198 28.6297 20.4198 28.6297C20.4198 28.6297 32.8486 28.6297 35.9558 27.812C37.6566 27.3541 38.9976 26.0131 39.4555 24.3123C40.2732 21.2051 40.2732 14.7618 40.2732 14.7618C40.2732 14.7618 40.3059 8.28567 39.4555 5.17846Z" fill="currentColor" />
              <path d="M16.4609 8.77612V20.6816L26.7966 14.7289L16.4609 8.77612Z" fill="white" />
              <path d="M64.272 25.0647C63.487 24.5413 62.931 23.7237 62.6039 22.5789C62.2768 21.4669 62.1133 19.9623 62.1133 18.1307V15.6122C62.1133 13.7479 62.3095 12.2434 62.6693 11.0986C63.0618 9.95386 63.6505 9.13618 64.4355 8.61286C65.2532 8.08954 66.2998 7.82788 67.6081 7.82788C68.8837 7.82788 69.9304 8.08954 70.7153 8.61286C71.5003 9.13618 72.0564 9.98657 72.4161 11.0986C72.7759 12.2107 72.9722 13.7152 72.9722 15.6122V18.1307C72.9722 19.995 72.8086 21.4669 72.4488 22.6116C72.0891 23.7237 71.533 24.5741 70.7481 25.0974C69.9631 25.6207 68.8837 25.8824 67.5427 25.8824C66.169 25.8496 65.057 25.588 64.272 25.0647ZM68.6875 22.3172C68.9164 21.7612 69.0146 20.8127 69.0146 19.5371V14.1077C69.0146 12.8648 68.9164 11.949 68.6875 11.3603C68.4585 10.7715 68.0988 10.5099 67.5427 10.5099C67.0194 10.5099 66.6269 10.8043 66.4307 11.3603C66.2017 11.949 66.1036 12.8648 66.1036 14.1077V19.5371C66.1036 20.8127 66.2017 21.7612 66.4307 22.3172C66.6269 22.8733 67.0194 23.1676 67.5754 23.1676C68.0987 23.1676 68.4585 22.906 68.6875 22.3172Z" fill="currentColor" />
              <path d="M124.649 18.1634V19.0465C124.649 20.1586 124.682 21.009 124.748 21.565C124.813 22.121 124.944 22.5462 125.173 22.7752C125.369 23.0368 125.696 23.1677 126.154 23.1677C126.743 23.1677 127.135 22.9387 127.364 22.4808C127.593 22.0229 127.691 21.2706 127.724 20.1913L131.093 20.3875C131.125 20.5511 131.125 20.7473 131.125 21.009C131.125 22.6117 130.7 23.8218 129.817 24.6068C128.934 25.3918 127.691 25.7843 126.089 25.7843C124.159 25.7843 122.818 25.1628 122.033 23.9527C121.248 22.7425 120.855 20.8782 120.855 18.327V15.2852C120.855 12.6686 121.248 10.7715 122.066 9.56136C122.883 8.35119 124.257 7.76245 126.187 7.76245C127.528 7.76245 128.574 8.02411 129.294 8.51472C130.013 9.00534 130.504 9.79032 130.798 10.8042C131.093 11.8509 131.223 13.29 131.223 15.1216V18.098H124.649V18.1634ZM125.14 10.837C124.944 11.0986 124.813 11.4911 124.748 12.0471C124.682 12.6032 124.649 13.4536 124.649 14.5983V15.8412H127.528V14.5983C127.528 13.4863 127.495 12.6359 127.43 12.0471C127.364 11.4584 127.201 11.0659 127.004 10.837C126.808 10.608 126.481 10.4772 126.089 10.4772C125.631 10.4445 125.336 10.5753 125.14 10.837Z" fill="currentColor" />
              <path d="M54.7216 17.8362L50.2734 1.71143H54.1656L55.7356 9.0052C56.1281 10.8041 56.4224 12.3414 56.6187 13.617H56.7168C56.8476 12.7011 57.142 11.1966 57.5999 9.0379L59.2353 1.71143H63.1274L58.6138 17.8362V25.5552H54.7543V17.8362H54.7216Z" fill="currentColor" />
              <path d="M85.6299 8.15479V25.5878H82.5554L82.2283 23.4619H82.1302C81.3125 25.0645 80.0369 25.8822 78.3688 25.8822C77.2241 25.8822 76.3737 25.4897 75.8177 24.7375C75.2617 23.9852 75 22.8077 75 21.1723V8.15479H78.9249V20.9434C78.9249 21.7284 79.023 22.2844 79.1865 22.6115C79.3501 22.9385 79.6444 23.1021 80.0369 23.1021C80.364 23.1021 80.6911 23.004 81.0181 22.775C81.3452 22.5788 81.5742 22.3171 81.705 21.99V8.15479H85.6299Z" fill="currentColor" />
              <path d="M105.747 8.15479V25.5878H102.673L102.346 23.4619H102.247C101.43 25.0645 100.154 25.8822 98.4861 25.8822C97.3413 25.8822 96.4909 25.4897 95.9349 24.7375C95.3788 23.9852 95.1172 22.8077 95.1172 21.1723V8.15479H99.0421V20.9434C99.0421 21.7284 99.1402 22.2844 99.3038 22.6115C99.4673 22.9385 99.7617 23.1021 100.154 23.1021C100.481 23.1021 100.808 23.004 101.135 22.775C101.462 22.5788 101.691 22.3171 101.822 21.99V8.15479H105.747Z" fill="currentColor" />
              <path d="M96.2907 4.88405H92.3986V25.5552H88.5718V4.88405H84.6797V1.71143H96.2907V4.88405Z" fill="currentColor" />
              <path d="M118.731 10.935C118.502 9.82293 118.11 9.03795 117.587 8.54734C117.063 8.05672 116.311 7.79506 115.395 7.79506C114.676 7.79506 113.989 7.99131 113.367 8.41651C112.746 8.809 112.255 9.36502 111.928 10.0192H111.896V0.828369H108.102V25.5552H111.34L111.732 23.9199H111.83C112.125 24.5086 112.582 24.9665 113.204 25.3263C113.825 25.6533 114.479 25.8496 115.232 25.8496C116.573 25.8496 117.521 25.2281 118.143 24.018C118.764 22.8078 119.091 20.8781 119.091 18.2942V15.5467C119.059 13.5516 118.96 12.0143 118.731 10.935ZM115.134 18.0325C115.134 19.3081 115.068 20.2893 114.97 21.0089C114.872 21.7285 114.676 22.2518 114.447 22.5461C114.185 22.8405 113.858 23.004 113.466 23.004C113.138 23.004 112.844 22.9386 112.582 22.7751C112.321 22.6116 112.092 22.3826 111.928 22.0882V12.2106C112.059 11.7527 112.288 11.3602 112.615 11.0331C112.942 10.7387 113.302 10.5752 113.662 10.5752C114.054 10.5752 114.381 10.7387 114.578 11.0331C114.807 11.3602 114.937 11.8835 115.036 12.6031C115.134 13.3553 115.166 14.402 115.166 15.743V18.0325H115.134Z" fill="currentColor" />
            </svg>
          </a>
          <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
            <svg class="h-11" viewBox="0 0 208 42" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M42.7714 20.729C42.7714 31.9343 33.6867 41.019 22.4814 41.019C11.2747 41.019 2.19141 31.9343 2.19141 20.729C2.19141 9.52228 11.2754 0.438965 22.4814 0.438965C33.6867 0.438965 42.7714 9.52297 42.7714 20.729Z" fill="currentColor" />
              <path d="M25.1775 21.3312H20.1389V15.9959H25.1775C25.5278 15.9959 25.8747 16.0649 26.1983 16.1989C26.522 16.333 26.8161 16.5295 27.0638 16.7772C27.3115 17.0249 27.508 17.319 27.6421 17.6427C27.7761 17.9663 27.8451 18.3132 27.8451 18.6635C27.8451 19.0139 27.7761 19.3608 27.6421 19.6844C27.508 20.0081 27.3115 20.3021 27.0638 20.5499C26.8161 20.7976 26.522 20.9941 26.1983 21.1281C25.8747 21.2622 25.5278 21.3312 25.1775 21.3312ZM25.1775 12.439H16.582V30.2234H20.1389V24.8881H25.1775C28.6151 24.8881 31.402 22.1012 31.402 18.6635C31.402 15.2258 28.6151 12.439 25.1775 12.439Z" fill="white" />
              <path d="M74.9361 17.4611C74.9361 16.1521 73.9305 15.3588 72.6239 15.3588H69.1216V19.5389H72.6248C73.9313 19.5389 74.9369 18.7457 74.9369 17.4611H74.9361ZM65.8047 28.2977V12.439H73.0901C76.4778 12.439 78.3213 14.7283 78.3213 17.4611C78.3213 20.1702 76.4542 22.4588 73.0901 22.4588H69.1216V28.2977H65.8055H65.8047ZM80.3406 28.2977V16.7362H83.3044V18.2543C84.122 17.2731 85.501 16.4563 86.9027 16.4563V19.3518C86.6912 19.3054 86.4349 19.2826 86.0851 19.2826C85.1039 19.2826 83.7949 19.8424 83.3044 20.5681V28.2977H80.3397H80.3406ZM96.8802 22.3652C96.8802 20.6136 95.8503 19.0955 93.9823 19.0955C92.1364 19.0955 91.1105 20.6136 91.1105 22.366C91.1105 24.1404 92.1364 25.6585 93.9823 25.6585C95.8503 25.6585 96.8794 24.1404 96.8794 22.3652H96.8802ZM88.0263 22.3652C88.0263 19.1663 90.2684 16.4563 93.9823 16.4563C97.7198 16.4563 99.962 19.1655 99.962 22.3652C99.962 25.5649 97.7198 28.2977 93.9823 28.2977C90.2684 28.2977 88.0263 25.5649 88.0263 22.3652ZM109.943 24.3739V20.3801C109.452 19.6316 108.378 19.0955 107.396 19.0955C105.693 19.0955 104.524 20.4265 104.524 22.366C104.524 24.3267 105.693 25.6585 107.396 25.6585C108.378 25.6585 109.452 25.1215 109.943 24.3731V24.3739ZM109.943 28.2977V26.5697C109.054 27.6899 107.841 28.2977 106.462 28.2977C103.637 28.2977 101.465 26.1499 101.465 22.3652C101.465 18.6993 103.59 16.4563 106.462 16.4563C107.793 16.4563 109.054 17.0177 109.943 18.1843V12.439H112.932V28.2977H109.943ZM123.497 28.2977V26.5925C122.727 27.4337 121.372 28.2977 119.526 28.2977C117.052 28.2977 115.884 26.9431 115.884 24.7473V16.7362H118.849V23.5798C118.849 25.1451 119.666 25.6585 120.927 25.6585C122.071 25.6585 122.983 25.028 123.497 24.3731V16.7362H126.463V28.2977H123.497ZM128.69 22.3652C128.69 18.9092 131.212 16.4563 134.67 16.4563C136.982 16.4563 138.383 17.4611 139.131 18.4886L137.191 20.3093C136.655 19.5153 135.838 19.0955 134.81 19.0955C133.011 19.0955 131.751 20.4037 131.751 22.366C131.751 24.3267 133.011 25.6585 134.81 25.6585C135.838 25.6585 136.655 25.1915 137.191 24.4203L139.131 26.2426C138.383 27.2702 136.982 28.2977 134.67 28.2977C131.212 28.2977 128.69 25.8456 128.69 22.3652ZM141.681 25.1915V19.329H139.813V16.7362H141.681V13.6528H144.648V16.7362H146.935V19.329H144.648V24.3975C144.648 25.1215 145.02 25.6585 145.675 25.6585C146.118 25.6585 146.541 25.495 146.702 25.3087L147.334 27.5728C146.891 27.9714 146.096 28.2977 144.857 28.2977C142.779 28.2977 141.681 27.2238 141.681 25.1915ZM165.935 28.2977V21.454H158.577V28.2977H155.263V12.439H158.577V18.5577H165.935V12.4398H169.275V28.2977H165.935ZM179.889 28.2977V26.5925C179.119 27.4337 177.764 28.2977 175.919 28.2977C173.443 28.2977 172.276 26.9431 172.276 24.7473V16.7362H175.241V23.5798C175.241 25.1451 176.058 25.6585 177.32 25.6585C178.464 25.6585 179.376 25.028 179.889 24.3731V16.7362H182.856V28.2977H179.889ZM193.417 28.2977V21.1986C193.417 19.6333 192.602 19.0963 191.339 19.0963C190.172 19.0963 189.285 19.7504 188.77 20.4045V28.2985H185.806V16.7362H188.77V18.1843C189.495 17.3439 190.896 16.4563 192.718 16.4563C195.217 16.4563 196.408 17.8573 196.408 20.0523V28.2977H193.418H193.417ZM199.942 25.1915V19.329H198.076V16.7362H199.943V13.6528H202.91V16.7362H205.198V19.329H202.91V24.3975C202.91 25.1215 203.282 25.6585 203.936 25.6585C204.38 25.6585 204.802 25.495 204.965 25.3087L205.595 27.5728C205.152 27.9714 204.356 28.2977 203.119 28.2977C201.04 28.2977 199.943 27.2238 199.943 25.1915" fill="currentColor" />
            </svg>
          </a>
          <a href="#" class="mr-5 mb-5 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
            <svg class="h-11" viewBox="0 0 120 41" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.058 40.5994C31.0322 40.5994 39.9286 31.7031 39.9286 20.7289C39.9286 9.75473 31.0322 0.858398 20.058 0.858398C9.08385 0.858398 0.1875 9.75473 0.1875 20.7289C0.1875 31.7031 9.08385 40.5994 20.058 40.5994Z" fill="currentColor" />
              <path d="M33.3139 20.729C33.3139 19.1166 32.0101 17.8362 30.4211 17.8362C29.6388 17.8362 28.9272 18.1442 28.4056 18.6424C26.414 17.2196 23.687 16.2949 20.6518 16.1765L21.9796 9.96387L26.2951 10.8885C26.3429 11.9793 27.2437 12.8567 28.3584 12.8567C29.4965 12.8567 30.4211 11.9321 30.4211 10.7935C30.4211 9.65536 29.4965 8.73071 28.3584 8.73071C27.5522 8.73071 26.8406 9.20497 26.5086 9.89271L21.6954 8.87303C21.553 8.84917 21.4107 8.87303 21.3157 8.94419C21.1972 9.01535 21.1261 9.13381 21.1026 9.27613L19.6321 16.1999C16.5497 16.2949 13.7753 17.2196 11.7599 18.6662C11.2171 18.1478 10.495 17.8589 9.74439 17.86C8.13201 17.86 6.85156 19.1639 6.85156 20.7529C6.85156 21.9383 7.56272 22.9341 8.55897 23.3849C8.51123 23.6691 8.48781 23.9538 8.48781 24.2623C8.48781 28.7197 13.6807 32.348 20.083 32.348C26.4852 32.348 31.6781 28.7436 31.6781 24.2623C31.6781 23.9776 31.6543 23.6691 31.607 23.3849C32.6028 22.9341 33.3139 21.9144 33.3139 20.729ZM13.4434 22.7918C13.4434 21.6536 14.368 20.729 15.5066 20.729C16.6447 20.729 17.5694 21.6536 17.5694 22.7918C17.5694 23.9299 16.6447 24.855 15.5066 24.855C14.368 24.8784 13.4434 23.9299 13.4434 22.7918ZM24.9913 28.2694C23.5685 29.6921 20.8653 29.7872 20.083 29.7872C19.2768 29.7872 16.5736 29.6683 15.1742 28.2694C14.9612 28.0559 14.9612 27.7239 15.1742 27.5105C15.3877 27.2974 15.7196 27.2974 15.9331 27.5105C16.8343 28.4117 18.7314 28.7197 20.083 28.7197C21.4346 28.7197 23.355 28.4117 24.2324 27.5105C24.4459 27.2974 24.7778 27.2974 24.9913 27.5105C25.1809 27.7239 25.1809 28.0559 24.9913 28.2694ZM24.6116 24.8784C23.4735 24.8784 22.5488 23.9538 22.5488 22.8156C22.5488 21.6775 23.4735 20.7529 24.6116 20.7529C25.7502 20.7529 26.6748 21.6775 26.6748 22.8156C26.6748 23.9299 25.7502 24.8784 24.6116 24.8784Z" fill="white" />
              <path d="M108.412 16.6268C109.8 16.6268 110.926 15.5014 110.926 14.1132C110.926 12.725 109.8 11.5996 108.412 11.5996C107.024 11.5996 105.898 12.725 105.898 14.1132C105.898 15.5014 107.024 16.6268 108.412 16.6268Z" fill="currentColor" />
              <path d="M72.5114 24.8309C73.7446 24.8309 74.4557 23.9063 74.4084 23.0051C74.385 22.5308 74.3373 22.2223 74.29 21.9854C73.5311 18.7133 70.8756 16.2943 67.7216 16.2943C63.9753 16.2943 60.9401 19.6853 60.9401 23.8586C60.9401 28.0318 63.9753 31.4228 67.7216 31.4228C70.0694 31.4228 71.753 30.5693 72.9622 29.2177C73.5549 28.5538 73.4365 27.5341 72.7249 27.036C72.1322 26.6329 71.3972 26.7752 70.8517 27.2256C70.3302 27.6765 69.3344 28.5772 67.7216 28.5772C65.825 28.5772 64.2126 26.941 63.8568 24.7832H72.5114V24.8309ZM67.6981 19.1637C69.4051 19.1637 70.8756 20.4915 71.421 22.3173H63.9752C64.5207 20.468 65.9907 19.1637 67.6981 19.1637ZM61.0824 17.7883C61.0824 17.0771 60.5609 16.5078 59.897 16.3894C57.8338 16.0813 55.8895 16.8397 54.7752 18.2391V18.049C54.7752 17.1717 54.0636 16.6267 53.3525 16.6267C52.5697 16.6267 51.9297 17.2667 51.9297 18.049V29.6681C51.9297 30.427 52.4985 31.0908 53.2574 31.1381C54.0875 31.1854 54.7752 30.5454 54.7752 29.7154V23.7162C54.7752 21.0608 56.7668 18.8791 59.5173 19.1876H59.802C60.5131 19.1399 61.0824 18.5233 61.0824 17.7883ZM109.834 19.306C109.834 18.5233 109.194 17.8833 108.412 17.8833C107.629 17.8833 106.989 18.5233 106.989 19.306V29.7154C106.989 30.4981 107.629 31.1381 108.412 31.1381C109.194 31.1381 109.834 30.4981 109.834 29.7154V19.306ZM88.6829 11.4338C88.6829 10.651 88.0429 10.011 87.2602 10.011C86.4779 10.011 85.8379 10.651 85.8379 11.4338V17.7648C84.8655 16.7924 83.6562 16.3182 82.2096 16.3182C78.4632 16.3182 75.4281 19.7091 75.4281 23.8824C75.4281 28.0557 78.4632 31.4466 82.2096 31.4466C83.6562 31.4466 84.8893 30.9485 85.8613 29.9761C85.9797 30.6405 86.5729 31.1381 87.2602 31.1381C88.0429 31.1381 88.6829 30.4981 88.6829 29.7154V11.4338ZM82.2334 28.6245C80.0518 28.6245 78.2971 26.5145 78.2971 23.8824C78.2971 21.2742 80.0518 19.1399 82.2334 19.1399C84.4151 19.1399 86.1698 21.2504 86.1698 23.8824C86.1698 26.5145 84.3912 28.6245 82.2334 28.6245ZM103.527 11.4338C103.527 10.651 102.887 10.011 102.104 10.011C101.322 10.011 100.681 10.651 100.681 11.4338V17.7648C99.7093 16.7924 98.5 16.3182 97.0534 16.3182C93.307 16.3182 90.2719 19.7091 90.2719 23.8824C90.2719 28.0557 93.307 31.4466 97.0534 31.4466C98.5 31.4466 99.7327 30.9485 100.705 29.9761C100.824 30.6405 101.416 31.1381 102.104 31.1381C102.887 31.1381 103.527 30.4981 103.527 29.7154V11.4338ZM97.0534 28.6245C94.8717 28.6245 93.1174 26.5145 93.1174 23.8824C93.1174 21.2742 94.8717 19.1399 97.0534 19.1399C99.235 19.1399 100.99 21.2504 100.99 23.8824C100.99 26.5145 99.235 28.6245 97.0534 28.6245ZM117.042 29.7392V19.1637H118.299C118.963 19.1637 119.556 18.6656 119.603 17.9779C119.651 17.2428 119.058 16.6267 118.347 16.6267H117.042V14.6347C117.042 13.8758 116.474 13.2119 115.715 13.1646C114.885 13.1173 114.197 13.7573 114.197 14.5874V16.6501H113.011C112.348 16.6501 111.755 17.1483 111.708 17.836C111.66 18.571 112.253 19.1876 112.964 19.1876H114.173V29.7631C114.173 30.5454 114.814 31.1854 115.596 31.1854C116.426 31.1381 117.042 30.5216 117.042 29.7392Z" fill="currentColor" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 overflow-hidden">
    <div class="container px-4 mx-auto">

      <article class="grid grid-cols-3 gap-6">
        <section class="grid grid-cols-2 col-span-2 gap-4 sm:grid-cols-3">
          <div class="flex flex-col col-span-3 gap-6">
            <article class="max-w-lg">
              <h3 class="mb-4 text-lg font-medium text-gray-600">
                Hi <strong class="font-semibold">{{ Auth::user()->name }}</strong>! Let's get started
              </h3>

              <p class="mb-4">
                Welcome to the project management system! The system is designed to help you stay organized and on top of your projects, so you can focus on what matters most. With this system, you can:
              </p>

              <ul class="mb-8 space-y-4 text-left text-gray-500 dark:text-gray-400">
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Create projects and assign tasks to team members</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Track the progress of your projects and tasks in real-time</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Collaborate with your team members and communicate effectively</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Set deadlines and priorities to ensure that nothing falls through the cracks</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>Generate reports and analyze data to gain insights into your project's performance</span>
                </li>
              </ul>

              <p>
                The system is pretty much user-friendly and easy to use, with an intuitive interface that makes it easy to get started. Whether you're a project manager, team leader, or individual contributor, there is everything you need to manage your projects effectively.
              </p>
            </article>

            <section class="grid grid-cols-3 col-span-3 gap-4">
              <x-splade-link href="#">
                <x-action-card bg="bg-[#c4e6fa]">
                  <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-blue-900" name="vehicle" class="text-blue-900 custom-color">
                      <path fill="" d="M18 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM9 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                      <path fill="" fill-rule="evenodd" d="M4.596 7.342A4 4 0 018.54 4h6.918a4 4 0 013.945 3.342l.11.658H21a1 1 0 110 2h-1.153l.087.52 1.187 1.187A3 3 0 0122 13.828v.7a3 3 0 01-.317 1.341L21 17.236V20a1 1 0 01-1 1h-1a1 1 0 01-1-1v-1H6v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-2.764l-.683-1.367A3 3 0 012 14.529v-.7a3 3 0 01.879-2.12l1.187-1.188.087-.52H3a1 1 0 010-2h1.486l.11-.658zM5.414 12l-1.121 1.121a1 1 0 00-.293.707v.7a1 1 0 00.106.447l.736 1.472a1 1 0 00.894.553h12.528a1 1 0 00.894-.553l.736-1.472a1 1 0 00.106-.447v-.7a1 1 0 00-.293-.707L18.586 12H5.414zm12.405-2l-.388-2.329A2 2 0 0015.46 6H8.54A2 2 0 006.57 7.671L6.18 10h11.64z" clip-rule="evenodd"></path>
                    </svg>
                  </x-slot>

                  Add a Vehicle
                </x-action-card>
              </x-splade-link>

              <x-splade-link href="#">
                <x-action-card bg="bg-[#c8f4dd]">
                  <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-green-900" name="check-circle" class="text-green-900 custom-color">
                      <path fill="" fill-rule="evenodd" d="M4 12a8 8 0 1116 0 8 8 0 01-16 0zm8-10C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm3.707 8.707a1 1 0 00-1.414-1.414L11 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                  </x-slot>

                  Inspection
                </x-action-card>
              </x-splade-link>

              <x-splade-link href="#">
                <x-action-card bg="bg-[#fff1cf]">
                  <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-yellow-900" name="warning" class="text-yellow-900 custom-color">
                      <path fill="" fill-rule="evenodd" d="M21.527 15.476L14.987 4.85c-1.317-2.468-4.658-2.468-5.975 0L2.473 15.476a3.87 3.87 0 00-.024 3.66C3.006 20.186 4.079 21 5.445 21h13.112c1.366 0 2.439-.815 2.994-1.864a3.87 3.87 0 00-.023-3.66zm-10.76-9.667c.563-1.079 1.902-1.079 2.465 0 .01.021.023.042.035.062l6.536 10.62a1.87 1.87 0 01-.02 1.71c-.268.505-.72.799-1.227.799H5.444c-.508 0-.96-.294-1.227-.8a1.87 1.87 0 01-.02-1.71l6.535-10.619a.978.978 0 00.035-.062zM12 8a1 1 0 011 1v5a1 1 0 11-2 0V9a1 1 0 011-1zm1 9a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
                    </svg>
                  </x-slot>

                  Create an Issue
                </x-action-card>
              </x-splade-link>

              <x-splade-link href="#">
                <x-action-card>
                  <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-teal-900" name="wrench" class="text-teal-900 custom-color">
                      <path fill="" fill-rule="evenodd" d="M13.48 4.022a6.025 6.025 0 00-3.686 1.732 5.982 5.982 0 000 8.485 6 6 0 008.485 0c.992-.991 1.576-2.33 1.723-3.599.09-.785.01-1.48-.195-2.03l-3.083 3.084a2.4 2.4 0 01-3.395 0l-.99-.99a2.4 2.4 0 010-3.394l3.077-3.076c-.522-.19-1.183-.28-1.937-.212zm-.181-1.991c1.653-.15 3.347.251 4.415 1.319a1 1 0 010 1.414l-3.96 3.96a.4.4 0 000 .566l.99.99a.4.4 0 00.565 0l3.96-3.96a1 1 0 011.415 0c1.144 1.144 1.496 2.893 1.305 4.55-.194 1.68-.96 3.447-2.296 4.784a8.001 8.001 0 01-8.443 1.844l-3.56 3.559a3.333 3.333 0 11-4.714-4.714l3.557-3.556A7.978 7.978 0 018.38 4.34a8.025 8.025 0 014.919-2.31zM7.515 14.633L4.39 17.757a1.333 1.333 0 001.885 1.886l3.125-3.125a8.043 8.043 0 01-1.886-1.885z" clip-rule="evenodd"></path>
                    </svg>
                  </x-slot>

                  Log a Service
                </x-action-card>
              </x-splade-link>

              <x-splade-link href="#">
                <x-action-card bg="bg-[#fdd2cf]">
                  <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-red-900" name="user-add" class="text-red-900 custom-color">
                      <path fill="" fill-rule="evenodd" d="M9 3a5 5 0 100 10A5 5 0 009 3zM6 8a3 3 0 116 0 3 3 0 01-6 0zm13 2a1 1 0 10-2 0v2h-2a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2v-2zm-5.176 5.688C12.51 14.593 10.777 14 8.997 14c-1.78 0-3.513.595-4.826 1.692-1.317 1.1-2.118 2.633-2.169 4.285a1 1 0 102 .062c.03-1.027.529-2.041 1.451-2.812C6.38 16.453 7.65 16 8.998 16c1.347 0 2.618.451 3.545 1.225.924.77 1.423 1.783 1.455 2.81a1 1 0 002-.063c-.053-1.653-.856-3.184-2.174-4.284z" clip-rule="evenodd"></path>
                    </svg>
                  </x-slot>

                  Add User
                </x-action-card>
              </x-splade-link>

              <x-splade-link href="#">
                <x-action-card bg="bg-[#e1dff9]">
                  <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32.48" height="32.48" fill="currentColor" viewBox="0 0 24 24" color="text-purple-900" name="bar-chart" class="text-purple-900 custom-color">
                      <path fill="" fill-rule="evenodd" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v3h4a2 2 0 012 2v10a1 1 0 01-1 1H3a1 1 0 01-1-1v-5a2 2 0 012-2h4V5zm0 10H4v4h4v-4zm2 4h4V5h-4v14zm6 0h4v-9h-4v9z" clip-rule="evenodd"></path>
                    </svg>
                  </x-slot>

                  Run Reports
                </x-action-card>
              </x-splade-link>
            </section>

            <section class="col-span-3 mt-6 first:mt-0">

              <article class="grid grid-cols-3 col-span-3 gap-4 pt-6 mt-6 border-t">

                @foreach ($projects as $project)
                <x-project-card :project="$project" />
                @endforeach

                <div>
                  {{-- <Link class="inline-flex items-center justify-center font-semibold leading-normal text-center text-indigo-600 hover:text-indigo-700" href="{{ route('projects.index') }}">
                  <span class="mr-2.5">See all {{ $projectsCount }} projects</span>
                  <svg width="17" height="16" viewbox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.83333 3.33337L14.5 8.00004M14.5 8.00004L9.83333 12.6667M14.5 8.00004L2.5 8.00004" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                  </Link> --}}

                  <Link
                    class="inline-flex items-center justify-center font-semibold leading-normal text-center text-indigo-600 hover:text-indigo-700"
                    href="{{ route('projects.index') }}">
                    <span class="mr-2.5">See all {{ $projectsCount }} projects</span>
                    <svg class="hidden ml-1 w-4 h-4 -mt-0.5 transform -translate-x-2 transition-transform" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M9.83333 3.33337L14.5 8.00004M14.5 8.00004L9.83333 12.6667M14.5 8.00004L2.5 8.00004"></path>
                    </svg>
                  </Link>

                </div>

              </article>
            </section>
          </div>
        </section>

        <section class="space-y-10">
          <h2 class="mb-2">
            Learn
          </h2>

          <x-learn-link path="projects.index" max-width="7xl">
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" class="text-gray-600 transition duration-200 group-hover:text-gray-100">
                <path fill="" d="M18 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM9 14.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
                <path fill="" fill-rule="evenodd" d="M4.596 7.342A4 4 0 018.54 4h6.918a4 4 0 013.945 3.342l.11.658H21a1 1 0 110 2h-1.153l.087.52 1.187 1.187A3 3 0 0122 13.828v.7a3 3 0 01-.317 1.341L21 17.236V20a1 1 0 01-1 1h-1a1 1 0 01-1-1v-1H6v1a1 1 0 01-1 1H4a1 1 0 01-1-1v-2.764l-.683-1.367A3 3 0 012 14.529v-.7a3 3 0 01.879-2.12l1.187-1.188.087-.52H3a1 1 0 010-2h1.486l.11-.658zM5.414 12l-1.121 1.121a1 1 0 00-.293.707v.7a1 1 0 00.106.447l.736 1.472a1 1 0 00.894.553h12.528a1 1 0 00.894-.553l.736-1.472a1 1 0 00.106-.447v-.7a1 1 0 00-.293-.707L18.586 12H5.414zm12.405-2l-.388-2.329A2 2 0 0015.46 6H8.54A2 2 0 006.57 7.671L6.18 10h11.64z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Projects
            </x-slot>

            Projects are at the core of Onreels and can represent any current or otherwise.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="equipment" class="text-gray-600 custom-color">
                <path fill="" fill-rule="evenodd" d="M2.75 6a4 4 0 014-4h7c.889 0 1.687.386 2.236 1h1.764c1.398 0 2.573.956 2.905 2.25h.595a1.25 1.25 0 110 2.5h-.595A3.001 3.001 0 0117.75 10h-1.14c-.224.817-.697 1.443-1.318 1.907-.709.532-1.58.83-2.353 1.04L12.431 16H13.75a3 3 0 013 3v1a2 2 0 01-2 2h-9a2 2 0 01-2-2v-2a2 2 0 012-2h.153l.667-4h-.82a3 3 0 01-3-3V6zm12 2.898V5a1 1 0 00-1-1h-7a2 2 0 00-2 2v3a1 1 0 001 1h1.41a1.5 1.5 0 011.48 1.747L7.93 16h2.5c0-.108.01-.218.028-.329l.561-3.37c.1-.595.543-1.064 1.114-1.21.832-.212 1.5-.44 1.96-.784.393-.294.657-.687.657-1.409zm2-.898h1a1 1 0 001-1V6a1 1 0 00-1-1h-1v3zm-4 10H13.75a1 1 0 011 1v1h-9v-2H12.749zm-1-10a1 1 0 100-2h-3a1 1 0 000 2h3z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Equipment
            </x-slot>

            Equipment are non-rolling assets that your fleet uses to perform a job or in daily operations.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="box" class="text-gray-600 custom-color">
                <path fill="" d="M18.261 14.019a1 1 0 10-.866-1.803l-2.375 1.14a1 1 0 10.866 1.803l2.375-1.14z"></path>
                <path fill="" fill-rule="evenodd" d="M13.737 2.388a4 4 0 00-3.474 0L3.697 5.554A3 3 0 002 8.256v6.858a4 4 0 002.266 3.605l6 2.886a4 4 0 003.468 0l6-2.886A4 4 0 0022 15.114V8.256a3 3 0 00-1.697-2.702l-6.566-3.166zm-2.606 1.801a2 2 0 011.738 0l6.565 3.166.014.007-2.486 1.199a.984.984 0 00-.032-.016L9.514 4.969l1.617-.78zm-3.92 1.89L14.66 9.67 12 10.952l-7.45-3.59.016-.007L7.212 6.08zM4 9.317v5.797a2 2 0 001.133 1.802L11 19.74v-7.048L4 9.317zm9 10.422l5.867-2.823A2 2 0 0020 15.114V9.317l-7 3.374v7.048z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Parts & Inventory
            </x-slot>

            Manage all fleet parts and inventory locations, track usage, and use actionable data to improve purchasing decisions.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="calendar-check" class="text-gray-600 custom-color">
                <path fill="" d="M15.707 12.207a1 1 0 00-1.414-1.414L11 14.086l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"></path>
                <path fill="" fill-rule="evenodd" d="M9 4a1 1 0 00-2 0v1a4 4 0 00-4 4v8a4 4 0 004 4h10a4 4 0 004-4V9a4 4 0 00-4-4V4a1 1 0 10-2 0v1H9V4zM5 9a2 2 0 012-2v1a1 1 0 002 0V7h6v1a1 1 0 102 0V7a2 2 0 012 2v8a2 2 0 01-2 2H7a2 2 0 01-2-2V9z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Service Entries
            </x-slot>

            Track all of your maintenance activities, costs, vendor info, photos, documents, receipts and more.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="wrench" class="text-gray-600 custom-color">
                <path fill="" fill-rule="evenodd" d="M13.48 4.022a6.025 6.025 0 00-3.686 1.732 5.982 5.982 0 000 8.485 6 6 0 008.485 0c.992-.991 1.576-2.33 1.723-3.599.09-.785.01-1.48-.195-2.03l-3.083 3.084a2.4 2.4 0 01-3.395 0l-.99-.99a2.4 2.4 0 010-3.394l3.077-3.076c-.522-.19-1.183-.28-1.937-.212zm-.181-1.991c1.653-.15 3.347.251 4.415 1.319a1 1 0 010 1.414l-3.96 3.96a.4.4 0 000 .566l.99.99a.4.4 0 00.565 0l3.96-3.96a1 1 0 011.415 0c1.144 1.144 1.496 2.893 1.305 4.55-.194 1.68-.96 3.447-2.296 4.784a8.001 8.001 0 01-8.443 1.844l-3.56 3.559a3.333 3.333 0 11-4.714-4.714l3.557-3.556A7.978 7.978 0 018.38 4.34a8.025 8.025 0 014.919-2.31zM7.515 14.633L4.39 17.757a1.333 1.333 0 001.885 1.886l3.125-3.125a8.043 8.043 0 01-1.886-1.885z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Work Orders
            </x-slot>

            Work Orders are used to plan and complete service needed for a particular vehicle via in-house maintenance.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="clipboard-note" class="text-gray-600 custom-color">
                <path fill="" fill-rule="evenodd" d="M7.23 6.154A2 2 0 006 8v10a2 2 0 002 2h8a2 2 0 002-2V8a2 2 0 00-1.23-1.846A3.001 3.001 0 0114 8h-4a3 3 0 01-2.77-1.846zm9.63-2.061A4.001 4.001 0 0120 8v10a4 4 0 01-4 4H8a4 4 0 01-4-4V8a4.001 4.001 0 013.14-3.907A3.001 3.001 0 0110 2h4c1.34 0 2.476.88 2.86 2.093zM9 5a1 1 0 011-1h4a1 1 0 110 2h-4a1 1 0 01-1-1zm0 10a1 1 0 100 2h6a1 1 0 100-2H9zm-1-3a1 1 0 011-1h6a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Inspections
            </x-slot>

            Inspections help drivers and operators complete their DVIRs electronically, surface and resolve defects quickly and produce a complete “paper-trail” in the event of an audit.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="fuel" class="text-gray-600 custom-color">
                <path fill="" d="M7 14a1 1 0 011-1h3a1 1 0 110 2H8a1 1 0 01-1-1z"></path>
                <path fill="" fill-rule="evenodd" d="M3 5a3 3 0 013-3h7a3 3 0 013 3v15a1 1 0 110 2H3a1 1 0 110-2V5zm2 15h9v-9H5v9zm9-11H5V5a1 1 0 011-1h7a1 1 0 011 1v4z" clip-rule="evenodd"></path>
                <path fill="" d="M17.4 5.2a1 1 0 011.4.2l2.6 3.467a3 3 0 01.6 1.8V17.5a2.5 2.5 0 01-5 0V14a1 1 0 112 0v3.5a.5.5 0 001 0v-6.833a1 1 0 00-.2-.6L17.2 6.6a1 1 0 01.2-1.4z"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Fuel
            </x-slot>

            Log fuel entries or connect fuel cards and gain insight into how fuel contributes to asset operating costs. Identify high-consumption vehicles and track metrics related to fuel usage.
          </x-learn-link>

          <x-learn-link>
            <x-slot name="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="27.839999999999996" height="27.839999999999996" fill="currentColor" viewBox="0 0 24 24" color="text-gray-600" name="users" class="text-gray-600 custom-color">
                <path fill="" fill-rule="evenodd" d="M4 8a5 5 0 1110 0A5 5 0 014 8zm5-3a3 3 0 100 6 3 3 0 000-6zm3 9.591A7.842 7.842 0 008.997 14c-1.78 0-3.513.595-4.826 1.692-1.317 1.1-2.118 2.633-2.169 4.285a1 1 0 102 .062c.03-1.027.529-2.041 1.451-2.812C6.38 16.453 7.65 16 8.998 16c1.347 0 2.618.451 3.545 1.225.924.77 1.423 1.783 1.455 2.81a1 1 0 002-.063c-.048-1.478-.695-2.86-1.774-3.922.25-.032.504-.05.76-.05.891-.002 1.761.194 2.524.561.762.368 1.382.89 1.812 1.501a3.62 3.62 0 01.678 1.973 1 1 0 002-.063 5.62 5.62 0 00-1.042-3.06c-.641-.912-1.534-1.648-2.58-2.152A7.796 7.796 0 0014.98 14a7.838 7.838 0 00-2.979.591zm4.696-11.295a5 5 0 00-2.008-.286 1 1 0 00.125 1.996 3 3 0 11-.004 5.988 1 1 0 00-.128 1.996 5 5 0 002.015-9.694z" clip-rule="evenodd"></path>
              </svg>
            </x-slot>

            <x-slot name="title">
              Users
            </x-slot>

            Users represent the Fleet Managers, Technicians, Operators, others who are part of your fleet's daily operations. Contacts can be enabled as Users, which grants them access to log in to Fleetio with their own credentials.
          </x-learn-link>
        </section>

      </article>
    </div>
  </section>

  <x-footer />
</main>
