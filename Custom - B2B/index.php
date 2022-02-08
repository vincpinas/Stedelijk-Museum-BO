<?php

get_header();

/* if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <p><a href="<?php the_permalink() ?>">Lees meer</a></p>
        <hr>

    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;  */

?>

<div class="hero container">
    <div class="hero_title" >
        <svg id="Laag_1" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 915.38 40.79"><defs><style>.cls-1{fill:#FFFFFF;}</style></defs><path class="cls-1" d="M35.18,89.79l.47,0a.93.93,0,0,0,.15.46.9.9,0,0,0,.38.29,1.24,1.24,0,0,0,.57.11,1.22,1.22,0,0,0,.5-.08.66.66,0,0,0,.32-.23.53.53,0,0,0,.1-.32.5.5,0,0,0-.1-.31.77.77,0,0,0-.34-.22c-.22-.07-.44-.12-.66-.17a3.56,3.56,0,0,1-.72-.23.94.94,0,0,1-.39-.35.86.86,0,0,1-.14-.46,1,1,0,0,1,.16-.52,1.09,1.09,0,0,1,.47-.38,1.79,1.79,0,0,1,.69-.12,1.82,1.82,0,0,1,.73.13,1,1,0,0,1,.48.39,1.15,1.15,0,0,1,.19.59l-.48,0a.76.76,0,0,0-.25-.53,1.07,1.07,0,0,0-.65-.18,1.12,1.12,0,0,0-.66.18.5.5,0,0,0-.2.39.41.41,0,0,0,.15.33,1.82,1.82,0,0,0,.74.27,3.86,3.86,0,0,1,.82.24,1.15,1.15,0,0,1,.49.38,1,1,0,0,1,.15.53,1,1,0,0,1-.17.56,1.14,1.14,0,0,1-.48.39,1.82,1.82,0,0,1-.72.15,2.45,2.45,0,0,1-.85-.15,1.19,1.19,0,0,1-.54-.45A1.32,1.32,0,0,1,35.18,89.79Zm3.43-2.34V84.16H37.38v-.44h2.95v.44H39.1v3.29ZM58.23,91V87.26h.49v1.85l1.86-1.85h.67l-1.56,1.51L61.31,91h-.65L59.33,89.1l-.61.6V91ZM37,97.16V93.43h.74l.88,2.64.17.55L39,96l.89-2.59h.67v3.73h-.47V94L39,97.16h-.44L37.46,94v3.17Zm6.62-1.49h.49v2.15a2.43,2.43,0,0,1-.12.89,1.06,1.06,0,0,1-.46.54,1.67,1.67,0,0,1-.87.21,1.85,1.85,0,0,1-.86-.18,1,1,0,0,1-.47-.52,2.27,2.27,0,0,1-.14-.93V95.67h.48v2.15a2.13,2.13,0,0,0,.09.71.67.67,0,0,0,.31.35,1.13,1.13,0,0,0,.54.13,1,1,0,0,0,.77-.25,1.38,1.38,0,0,0,.24-1Zm1.55,3.53.47,0a1,1,0,0,0,.15.46.82.82,0,0,0,.37.29,1.55,1.55,0,0,0,1.08,0,.82.82,0,0,0,.32-.24.5.5,0,0,0,.1-.31.48.48,0,0,0-.1-.31.74.74,0,0,0-.33-.22c-.22-.07-.44-.13-.67-.18a3,3,0,0,1-.72-.24.86.86,0,0,1-.53-.81,1,1,0,0,1,.16-.52,1.07,1.07,0,0,1,.47-.37,1.6,1.6,0,0,1,.68-.12,1.73,1.73,0,0,1,.74.13,1.07,1.07,0,0,1,.48.39,1.15,1.15,0,0,1,.19.59l-.48,0a.75.75,0,0,0-.26-.53,1,1,0,0,0-.64-.17,1,1,0,0,0-.66.17.5.5,0,0,0-.2.39.44.44,0,0,0,.14.34,2.21,2.21,0,0,0,.75.26,5.54,5.54,0,0,1,.82.24,1.12,1.12,0,0,1,.48.38.92.92,0,0,1,.16.53,1,1,0,0,1-.18.56,1.19,1.19,0,0,1-.48.41,1.82,1.82,0,0,1-.72.15,2.45,2.45,0,0,1-.85-.15,1.19,1.19,0,0,1-.54-.45,1.27,1.27,0,0,1-.2-.69Zm4.08,2.12V97.59h2.69V98h-2.2v1.15h2.06v.43H49.73v1.27H52v.44Zm6.09-2.42h.49v2.16a2.7,2.7,0,0,1-.12.89,1.06,1.06,0,0,1-.46.54,1.67,1.67,0,0,1-.87.21,1.82,1.82,0,0,1-.86-.18A1,1,0,0,1,53,102a2.45,2.45,0,0,1-.15-.93V98.9h.5v2.16a2.13,2.13,0,0,0,.09.71.73.73,0,0,0,.31.36A1.3,1.3,0,0,0,55.1,102a1.37,1.37,0,0,0,.23-.94Zm1.24,5.66v-3.73h.74l.88,2.64.18.55.2-.59.89-2.6h.66v3.73h-.47v-3.12l-1.09,3.12h-.44L57,101.39v3.17Zm2.54,6.25,1.43-3.73h.53l1.53,3.73H62l-.44-1.13H60l-.41,1.13Zm1.08-1.53h1.26l-.39-1-.27-.77a3.58,3.58,0,0,1-.2.71Zm-2.34,5.84v-3.73h.74l.88,2.65.18.55.2-.59.89-2.6h.66v3.73h-.47V112l-1.09,3.12H59.4L58.32,112v3.17Zm-3.31,2,.47,0a1,1,0,0,0,.15.45.85.85,0,0,0,.38.3,1.56,1.56,0,0,0,.57.11,1.43,1.43,0,0,0,.5-.09.62.62,0,0,0,.32-.23.52.52,0,0,0,.11-.32.46.46,0,0,0-.11-.3.67.67,0,0,0-.33-.22c-.1,0-.32-.1-.66-.19a3,3,0,0,1-.72-.23,1,1,0,0,1-.4-.35.81.81,0,0,1-.14-.46,1,1,0,0,1,.16-.52,1,1,0,0,1,.47-.37,1.75,1.75,0,0,1,.68-.13,1.83,1.83,0,0,1,.73.14,1,1,0,0,1,.49.39,1.12,1.12,0,0,1,.17.59l-.47,0a.73.73,0,0,0-.26-.53,1.26,1.26,0,0,0-1.3,0,.47.47,0,0,0-.2.39.4.4,0,0,0,.14.33,2,2,0,0,0,.74.27,4,4,0,0,1,.83.24,1.12,1.12,0,0,1,.48.38.9.9,0,0,1,.16.53,1.12,1.12,0,0,1-.18.56,1.15,1.15,0,0,1-.49.41,1.6,1.6,0,0,1-.72.14,2.18,2.18,0,0,1-.84-.14,1.19,1.19,0,0,1-.54-.45,1.31,1.31,0,0,1-.19-.69ZM52,119.67v-3.29H50.8V116h3v.44H52.51v3.29Zm-4.71.31v-3.73H50v.44H47.81v1.14h2.07v.44H47.81v1.27H50.1V120Zm-4.42-.69v-3.73h1.65a2.18,2.18,0,0,1,.76.1.83.83,0,0,1,.41.35,1,1,0,0,1,.16.57,1,1,0,0,1-.26.66,1.22,1.22,0,0,1-.79.35,1.17,1.17,0,0,1,.3.19,2.8,2.8,0,0,1,.41.49l.64,1h-.62l-.49-.78-.35-.52a1.18,1.18,0,0,0-.25-.25.88.88,0,0,0-.22-.1,1.31,1.31,0,0,0-.28,0H43.4v1.65Zm.49-2.09h1.06a1.31,1.31,0,0,0,.52-.07.53.53,0,0,0,.29-.22.56.56,0,0,0,.1-.33.53.53,0,0,0-.19-.44.88.88,0,0,0-.61-.17H43.4Zm-4.69,1.16v-3.73H40a3.79,3.79,0,0,1,.67.06,1.23,1.23,0,0,1,.54.26,1.5,1.5,0,0,1,.44.64,2.22,2.22,0,0,1,.15.89,2.71,2.71,0,0,1-.1.75,1.77,1.77,0,0,1-.25.54,1.25,1.25,0,0,1-.79.52,2.4,2.4,0,0,1-.6.07Zm.49-.44H40a1.92,1.92,0,0,0,.58-.07.73.73,0,0,0,.33-.19,1.11,1.11,0,0,0,.27-.47,2.24,2.24,0,0,0,.1-.72,1.76,1.76,0,0,0-.19-.9.94.94,0,0,0-.46-.42,2,2,0,0,0-.64-.08h-.79Zm-4.56-2.8,1.43-3.73h.53l1.53,3.73h-.56L37.12,114H35.56l-.41,1.13Zm1.08-1.53H37l-.38-1-.27-.77a4.41,4.41,0,0,1-.2.71Zm-1.65-3.09v-3.73h.74l.88,2.64.18.55c0-.13.11-.33.2-.6l.89-2.59h.66v3.73h-.46v-3.13l-1.09,3.13h-.45l-1.07-3.18v3.18ZM55.63,86.75V83h.5v3.73Zm1.11-1.06.45-.06a.94.94,0,0,0,.16.59.48.48,0,0,0,.39.15.5.5,0,0,0,.32-.08.39.39,0,0,0,.19-.23,1.48,1.48,0,0,0,0-.47V83h.49v2.54a1.8,1.8,0,0,1-.11.73.8.8,0,0,1-.36.39,1.23,1.23,0,0,1-.57.14,1,1,0,0,1-.75-.29A1.19,1.19,0,0,1,56.74,85.69Zm-4.22-1.1V80.87H53v3.28h1.84v.44Zm-3.59-.85V80h2.69v.44h-2.2V81.6h2.07V82H49.42v1.27h2.29v.43Zm-4.1,0V80h1.29a3,3,0,0,1,.66.06,1.27,1.27,0,0,1,.55.26,1.5,1.5,0,0,1,.44.64,3,3,0,0,1,0,1.64,1.92,1.92,0,0,1-.26.54,1.33,1.33,0,0,1-.34.33,1.49,1.49,0,0,1-.45.19,2.45,2.45,0,0,1-.6.06Zm.5-.43h.79a2.25,2.25,0,0,0,.58-.07A.83.83,0,0,0,47,83a1.18,1.18,0,0,0,.28-.47,2.16,2.16,0,0,0,.09-.72,1.76,1.76,0,0,0-.19-.9,1,1,0,0,0-.47-.42,2,2,0,0,0-.64-.07h-.78Zm-4.19,1.28V80.87h2.7v.43H41.63v1.15H43.7v.44H41.63v1.26h2.29v.44Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M69.42,81.21H97.5v3.11H85.28v35.47H81.63V84.32H69.42Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M104.84,119.79V81.21h25.67v3.11h-22V98.25h19.88v3.11H108.48v15.32H131v3.11Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M139.72,119.79V81.21h13.19c1.07,0,2.12,0,3.16.08a22.09,22.09,0,0,1,3.05.37,14.92,14.92,0,0,1,2.92.89,13.55,13.55,0,0,1,2.76,1.55A11.81,11.81,0,0,1,168,87.5a19.83,19.83,0,0,1,1.95,4.24,25.23,25.23,0,0,1,1,4.5,31.3,31.3,0,0,1,.05,8.12,26.37,26.37,0,0,1-.77,3.88,20.16,20.16,0,0,1-1.42,3.65,14.3,14.3,0,0,1-2.23,3.19,11.75,11.75,0,0,1-2.92,2.41,15.45,15.45,0,0,1-3.32,1.42,19.47,19.47,0,0,1-3.62.69,36.76,36.76,0,0,1-3.8.19Zm3.65-3.11h8.73a35.65,35.65,0,0,0,4.64-.29,13.61,13.61,0,0,0,4.42-1.47,8.73,8.73,0,0,0,3.16-2.63,14.4,14.4,0,0,0,2-3.62,19.69,19.69,0,0,0,1-4.1,31.29,31.29,0,0,0,.29-4.12,34.32,34.32,0,0,0-.27-4.26,17.47,17.47,0,0,0-1-4.13,13.68,13.68,0,0,0-2-3.59A10.37,10.37,0,0,0,161,85.76a11.63,11.63,0,0,0-4.08-1.18,44.28,44.28,0,0,0-4.77-.26h-8.73Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M180.56,119.79V81.21h25.67v3.11h-22V98.25h19.88v3.11H184.2v15.32h22.56v3.11Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M215.44,119.79V81.21h3.65v35.47h20.68v3.11Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M248.67,119.79V81.21h3.64v38.58Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M264.91,107.57c0,1.22,0,2.41.13,3.59a9.13,9.13,0,0,0,.8,3.19,5.28,5.28,0,0,0,2.09,2.28,7.65,7.65,0,0,0,3.94.86q3.75,0,5.28-2.15a10.6,10.6,0,0,0,1.53-6.21V81.21h3.64v28c0,3.76-.87,6.62-2.62,8.6s-4.5,3-8.26,3a10.84,10.84,0,0,1-5.25-1.1,8,8,0,0,1-3.08-2.95,11.79,11.79,0,0,1-1.47-4.23,31.86,31.86,0,0,1-.38-5Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M293.58,119.79V81.21h3.64v20l19.77-20h4.13L305.9,96.59l17.9,23.2h-4.45l-16.07-21-6.06,6v14.9Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M348.13,119.79V81.21h5.57l12.65,34h.11l12.43-34h5.52v38.58h-3.65V85.39h-.1L368,119.79h-3.43l-12.7-34.4h-.11v34.4Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M395.13,81.21h3.64v23q0,7.17,2.68,10.34c1.79,2.11,4.66,3.16,8.63,3.16a14.93,14.93,0,0,0,5.28-.83,8.06,8.06,0,0,0,3.51-2.52,10.44,10.44,0,0,0,1.92-4.2,26,26,0,0,0,.59-6v-23H425v24.06q0,7.56-3.73,11.55t-11.22,4q-7.56,0-11.26-4.07t-3.69-11.47Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M437.41,108.27a11.35,11.35,0,0,0,1.15,4.37,8.67,8.67,0,0,0,2.41,2.92,9.58,9.58,0,0,0,3.4,1.63,16.11,16.11,0,0,0,4.13.51,13.75,13.75,0,0,0,4.45-.64,8.4,8.4,0,0,0,3.05-1.74,6.75,6.75,0,0,0,1.74-2.55,8.22,8.22,0,0,0,.57-3,6,6,0,0,0-1-3.65,8,8,0,0,0-2.65-2.28,16.62,16.62,0,0,0-3.76-1.41c-1.41-.36-2.85-.71-4.34-1s-2.93-.74-4.34-1.21a13.43,13.43,0,0,1-3.75-1.87,9.14,9.14,0,0,1-2.65-3,9.61,9.61,0,0,1-1-4.69,9.51,9.51,0,0,1,.83-3.86,9.74,9.74,0,0,1,2.47-3.32,12.08,12.08,0,0,1,4.1-2.3,17.26,17.26,0,0,1,5.68-.86,16.15,16.15,0,0,1,5.7.91,11.39,11.39,0,0,1,4.05,2.49A10.28,10.28,0,0,1,460,87.26a12.24,12.24,0,0,1,.8,4.45h-3.48a8.62,8.62,0,0,0-.78-3.8,7,7,0,0,0-2.11-2.63,9,9,0,0,0-3.06-1.5,13,13,0,0,0-3.53-.48,12.61,12.61,0,0,0-4.69.77,8.28,8.28,0,0,0-3,2,6.79,6.79,0,0,0-1.55,2.74,6.64,6.64,0,0,0-.17,3,5.25,5.25,0,0,0,1.51,3,9.38,9.38,0,0,0,2.89,1.85,22.38,22.38,0,0,0,3.78,1.18q2.06.45,4.2,1A41.75,41.75,0,0,1,455,100a12.82,12.82,0,0,1,3.56,1.87,8.6,8.6,0,0,1,2.49,3,10.14,10.14,0,0,1,.94,4.64,10,10,0,0,1-3.7,8.3q-3.69,3-10.39,3a19.15,19.15,0,0,1-5.58-.78,12.29,12.29,0,0,1-4.44-2.36,10.69,10.69,0,0,1-2.93-3.91,13.41,13.41,0,0,1-1-5.49Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M470.79,119.79V81.21h25.67v3.11h-22V98.25h19.88v3.11H474.44v15.32H497v3.11Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M505.73,81.21h3.65v23q0,7.17,2.68,10.34c1.78,2.11,4.66,3.16,8.62,3.16a14.93,14.93,0,0,0,5.28-.83,8,8,0,0,0,3.51-2.52,10.45,10.45,0,0,0,1.93-4.2,26.6,26.6,0,0,0,.59-6v-23h3.64v24.06q0,7.56-3.72,11.55t-11.23,4c-5,0-8.79-1.36-11.25-4.07s-3.7-6.54-3.7-11.47Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M546.35,119.79V81.21h5.57l12.65,34h.11l12.43-34h5.52v38.58H579V85.39h-.11l-12.65,34.4H562.8l-12.7-34.4H550v34.4Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M606.8,119.79,622,81.21h4.13l14.79,38.58h-3.75l-4.45-12.11H615.11l-4.56,12.11Zm9.54-15.22h15.11l-7.56-20.25Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M648.06,119.79V81.21h5.57l12.65,34h.11l12.43-34h5.52v38.58H680.7V85.39h-.11l-12.65,34.4h-3.43l-12.7-34.4h-.1v34.4Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M696.5,108.27a11.53,11.53,0,0,0,1.16,4.37,8.67,8.67,0,0,0,2.41,2.92,9.58,9.58,0,0,0,3.4,1.63,16.11,16.11,0,0,0,4.13.51,13.79,13.79,0,0,0,4.45-.64,8.48,8.48,0,0,0,3.05-1.74,6.75,6.75,0,0,0,1.74-2.55,8.22,8.22,0,0,0,.57-3,6.11,6.11,0,0,0-1-3.65,7.89,7.89,0,0,0-2.66-2.28,16.35,16.35,0,0,0-3.75-1.41c-1.41-.36-2.86-.71-4.34-1s-2.93-.74-4.34-1.21a13.43,13.43,0,0,1-3.75-1.87,9.14,9.14,0,0,1-2.65-3,9.61,9.61,0,0,1-1-4.69,9.56,9.56,0,0,1,3.29-7.18,12.18,12.18,0,0,1,4.1-2.3,17.36,17.36,0,0,1,5.69-.86,16.19,16.19,0,0,1,5.7.91,11.39,11.39,0,0,1,4.05,2.49,10.41,10.41,0,0,1,2.41,3.67,12.24,12.24,0,0,1,.8,4.45h-3.48a8.62,8.62,0,0,0-.78-3.8,7.13,7.13,0,0,0-2.11-2.63,9.11,9.11,0,0,0-3.06-1.5A13,13,0,0,0,707,83.3a12.57,12.57,0,0,0-4.69.77,8.28,8.28,0,0,0-3,2,6.94,6.94,0,0,0-1.56,2.74,6.64,6.64,0,0,0-.16,3,5.3,5.3,0,0,0,1.5,3,9.43,9.43,0,0,0,2.9,1.85,22.38,22.38,0,0,0,3.78,1.18q2.06.45,4.2,1a41.75,41.75,0,0,1,4.16,1.21,12.82,12.82,0,0,1,3.56,1.87,8.6,8.6,0,0,1,2.49,3,10.14,10.14,0,0,1,.94,4.64,10,10,0,0,1-3.7,8.3q-3.69,3-10.39,3a19.15,19.15,0,0,1-5.58-.78,12.33,12.33,0,0,1-4.45-2.36,10.78,10.78,0,0,1-2.92-3.91,13.41,13.41,0,0,1-1-5.49Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M726.41,81.21h28.08v3.11H742.27v35.47h-3.65V84.32H726.41Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M761.83,119.79V81.21H787.5v3.11h-22V98.25h19.88v3.11H765.47v15.32H788v3.11Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M800.31,102.27v17.52l-3.65-.05V81.21h15.11q6.39,0,9.76,2.38t3.37,7.75a10.06,10.06,0,0,1-1.47,5.78,11.21,11.21,0,0,1-4.8,3.65,5.92,5.92,0,0,1,2.68,1.71,7.5,7.5,0,0,1,1.45,2.57,13.29,13.29,0,0,1,.62,3.06c.08,1.07.15,2.11.18,3.11,0,1.46.1,2.68.19,3.64s.2,1.75.32,2.36a5.62,5.62,0,0,0,.46,1.42,2.2,2.2,0,0,0,.64.78v.32l-4,.05a7.06,7.06,0,0,1-.83-2.68c-.16-1.14-.28-2.34-.37-3.59s-.16-2.46-.22-3.64a21.17,21.17,0,0,0-.29-2.9,6.07,6.07,0,0,0-1.05-2.49,4.75,4.75,0,0,0-1.74-1.42,7.66,7.66,0,0,0-2.28-.64,20,20,0,0,0-2.6-.16Zm11.36-3.11a15.68,15.68,0,0,0,3.78-.43,8.28,8.28,0,0,0,3-1.37,6.71,6.71,0,0,0,2-2.38,7.48,7.48,0,0,0,.75-3.48,7.19,7.19,0,0,0-.78-3.54,5.89,5.89,0,0,0-2.09-2.2,8.81,8.81,0,0,0-3-1.12,18.19,18.19,0,0,0-3.51-.32H800.31V99.16Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M834.6,119.79V81.21h13.19c1.07,0,2.12,0,3.16.08a22.09,22.09,0,0,1,3,.37,15.13,15.13,0,0,1,2.92.89,13.55,13.55,0,0,1,2.76,1.55,11.64,11.64,0,0,1,3.16,3.4,19.39,19.39,0,0,1,2,4.24,25.23,25.23,0,0,1,1,4.5,34.13,34.13,0,0,1,.29,4.21,32.56,32.56,0,0,1-.24,3.91,25.15,25.15,0,0,1-.78,3.88,19.45,19.45,0,0,1-1.42,3.65,14.26,14.26,0,0,1-2.22,3.19,11.94,11.94,0,0,1-2.92,2.41,15.45,15.45,0,0,1-3.32,1.42,19.47,19.47,0,0,1-3.62.69,36.76,36.76,0,0,1-3.8.19Zm3.65-3.11H847a35.77,35.77,0,0,0,4.64-.29,13.69,13.69,0,0,0,4.42-1.47,8.82,8.82,0,0,0,3.16-2.63,14.73,14.73,0,0,0,2-3.62,19.06,19.06,0,0,0,1-4.1,29.73,29.73,0,0,0,.3-4.12,34.32,34.32,0,0,0-.27-4.26,17.47,17.47,0,0,0-1-4.13,14,14,0,0,0-2-3.59,10.3,10.3,0,0,0-3.33-2.71,11.51,11.51,0,0,0-4.07-1.18,44.28,44.28,0,0,0-4.77-.26h-8.73Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M871.9,119.79l15.16-38.58h4.13L906,119.79h-3.75l-4.45-12.11H880.21l-4.56,12.11Zm9.54-15.22h15.11L889,84.32Z" transform="translate(-34.06 -80.02)"/><path class="cls-1" d="M913.16,119.79V81.21h5.57l12.65,34h.11l12.43-34h5.52v38.58H945.8V85.39h-.11L933,119.79h-3.43l-12.7-34.4h-.1v34.4Z" transform="translate(-34.06 -80.02)"/></svg>
    </div>
    <div class="hero-content">
        <div class="hero-left">
            <div class="textbox">
                <h1>WORKSHOP MET KUNSTENAAR</h1>
                <div>
                    <h4>BEDRIJFSUITJE BIJ STEDELIJK MUSEUM AMSTERDAM</h4>
                    <p>Volg een workshop van een van de kunstenaar(s) dat een expositie heeft in het Stedelijk Museum. Even ogen van uw computer af, schort aan, vouw je mouwen op en ga helemaal los op het canvas! Eerst komt er een rondleiding en vervolgens gaan we met de kunstenaar aan het werk om ons eigen kunst te maken.</p>
                    <button id="hero-button">LEES MEER</button>
                </div>
            </div>
            <div class="hero-lines" >
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
                <hr>
            </div>
        </div>
        <div class="hero-right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/hero.jpg">
        </div>
    </div>
</div>
<div class="about container">
    <div class="about-left">
        <h1 class="headtitle">ORGANISEER EEN BEDRIJFSUITJE
        IN HET STEDELIJK MUSEUM
        MET ARTIESTEN VAN DE EXPO’S.
        COMPUTER UIT, MOUWEN OPVOUWEN
        EN BEZIG ZIJN.
        </h1>
        <div class="tekstbox">
            <?php $rondleiding_info = get_post(16); ?>
            <h2><?php print_r($rondleiding_info->post_title); ?></h2>
            <?php print_r($rondleiding_info->post_content); ?>
        </div>
    </div>
    <div class="about-right">
        <div class="tekstbox">
            <?php $bedrijfsuitje_info = get_post(17); ?>
            <h2><?php print_r($bedrijfsuitje_info->post_title); ?></h2>
            <?php print_r($bedrijfsuitje_info->post_content); ?>
        </div>
        <div class="tekstbox2">
            <div>
                <?php $adress_info_subheader = get_post(21); ?>
                <h3><?php print_r($adress_info_subheader->post_title); ?></h3>
                <?php print_r($adress_info_subheader->post_content); ?>
            </div>
            <div>
                <?php $bezoeker_info_subheader = get_post(23); ?>
                <h3><?php print_r($bezoeker_info_subheader->post_title); ?></h3>
                <?php print_r($bezoeker_info_subheader->post_content); ?>
            </div>
        </div>
    </div>
</div>

<div class="slider-container container">
    <?php // foto slider
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
</div>


<div class="reviews container">
    <h1>BEKIJK WAT DE ANDEREN ERVAN VINDEN</h1>
    <div class="reviews-container">
        <?php // google reviews slider
        echo do_shortcode( '[grw id="41"]' ); 
        ?>
    </div>
</div>

<section id="pricing-section">
    <div class="wrapper">
        <?php $pricing_section = get_post(14); ?>
        <h3><?php print_r($pricing_section->post_title); ?></h3>
        <?php print_r($pricing_section->post_content); ?>
    </div>
</section>

<?php get_footer(); ?>