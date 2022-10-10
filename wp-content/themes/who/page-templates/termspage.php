<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package who
 * Template name:termspage
 */

get_header();
?>
<main id="primary" class="site-main">
    <body>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                <img id="b12" src="<?php bloginfo("template_directory"); ?>/img/B12product.png" alt="B12"/>  
                </div>
                <div class="slide">
                <img id="co" src="<?php bloginfo("template_directory"); ?>/img/coQ10Product.png" alt="C0Q10" />
                </div>
                <div class="slide">
                <img id="magnesium" src="<?php bloginfo("template_directory"); ?>/img/magnesiumProduct.png" alt="mag" />
                </div>
                <div class="slide">
                <img id="zinc" src="<?php bloginfo("template_directory"); ?>/img/zincProduct.png" alt="zinc"/>
                </div>
               
            </div>
        </div>
        <div class="slide-show">
       
                <img id="popup-image"/>
                <p id="pop-up-text"></p>
                <i class="fa fa-close" id="close"></i>
                </div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.slide img').click(function () { 
                 // console.log(this);
                  $('#popup-image').attr("src", this.src);
                  $('#pop-up-text').html(this.alt);
                    $('.slide-show').show();
                });
                $('#close').click(function(){
                    $('.slide-show').hide(); 
                });
            });
           
           
            </script>
    </body>








    <!-- <body id="terms-page">
        <div class="terms-banner"
            style="background-image:url('<?php bloginfo("template_directory");?>/img/termsBanner.png">
            <h1>TERMS & CONDITIONS</h1>
        </div>
        <div class="borderLine">
        </div>

        <div class="terms-content" 
        style="background-image:url('<?php bloginfo("template_directory");?>/img/background.jpg">
        <div>
            <p>1. USE OF THIS WEBSITE 
            This website is owned and operated by WHOLISTIC for your personal and non-commercial use and information. Your use of this website is subject to the following terms and conditions of use and sale (“Terms”) and all applicable laws. By accessing and browsing this website, you accept, without limitation or qualification, these Terms. If you do not agree with any of the Terms, please do not use this website. You are responsible for ensuring that your access to this website and material available on or through it are legal in each jurisdiction in or through which you access or view the website or such material. This website is based in Canada and WHOLISTIC is not responsible for compliance with foreign laws, regulations, ordinances and rules. If the laws, regulations, ordinances and rules in your jurisdiction render the Terms void in whole or in part (including, without limitation, the provisions relating to governing law, disclaimer and limitations), you are not authorized to use this website. WHOLISTIC reserves the right to change, modify, alter or otherwise update the Terms applicable to this website without prior written notice at any time, and from time to time, at WHOLISTIC’s sole discretion. Any such changes, modifications, alterations or updates to the Terms will be reflected in the Terms posted and the date of the posting will be updated accordingly. Any change in that “Last updated” date will indicate that the Terms have been updated and your continued use of this website will constitute your acceptance of the new terms and other policies, as modified, and you will be bound by said new terms and policies. Information on this website is provided for information purposes only and is not meant to substitute for the advice provided by your family physician or other medical professionals, including pharmacists or naturopathic doctors. You should not use the information contained on this website for diagnosing or treating a health problem or disease or prescribing any medication.
             2. PRIVACY Our privacy practices respecting the information we collect during your visit to this website are explained in our Privacy Policy, the terms of which are hereby incorporated herein by reference. Your continued use of this website implies that you acknowledge that you have read our Privacy Policy and agree to its terms and that you consent to the use of your personal information by WHOLISTIC in accordance with the terms of and for the purposes set forth in our Privacy Policy, as same may be amended from time to time.
              3. NO USE BY MINORS This website is intended for use by adults only. You represent that you are at least the age of majority to purchase and/or consume the products of WHOLISTIC, in the jurisdiction of your residence or purchase/use. You further represent that you understand the information that is made available on this website, including about the Products.
               4. HEALTH INFORMATION WHOLISTIC’s products themselves have been assigned NPNs, having been evaluated and approved by Health Canada. The statements regarding our Products have not been evaluated or approved by the Food and Drug Administration in the United States, Health Canada in Canada or any other regulatory authority or body. Our Products are not intended to diagnose, treat, cure or prevent any disease. The product information on this website, including description, potential effects and benefits, is intended for general information purposes only. It is not intended to provide complete medical information or to be a substitute for informed medical advice or care. You should not use this information to diagnose or treat any health problems or illnesses, or prescribe any medication, without consulting your family doctor, health care professional and/or pharmacist. You should carefully read all information provided by WHOLISTIC on the website and included with the Product’s packaging and labels before using any Product. You should consult your family doctor, health care professional and/or pharmacist and/or naturopathic doctor for any health problem and before using any supplements or before making any changes in prescribed medication. 
            5. PRODUCT INFORMATION & IMPORTING PRODUCTS WHOLISTIC makes absolutely no representations or warranties in respect of the right of any person or company to import natural health products, vitamins, supplements, herbal medicines or pharmaceutical products across provincial, state or international boundaries. It is your responsibility to determine whether you may lawfully import to and/or use our products in your country, province, state, region, county, city or town of residence or of use. Products are imported by you (the importer of record) and you are responsible for customs, duties, taxes and other charges related to importing the product in your country, province, state, region, county, city or town of residence or of use. WHOLISTIC attempts to be as accurate as possible in describing all products available for sale and/or distribution by WHOLISTIC. However, WHOLISTIC does not warrant that product descriptions or other content on this website are accurate, complete, reliable, current or error-free. 
            6. EXCLUSION AND DISCLAIMER OF WARRANTIES WHOLISTIC makes no representation or warranty regarding the functionality, the good working order or conditions of this website, its suitability for use, or that its use, or any information or material, accessed from or through this website will be uninterrupted or error-free. WHOLISTIC does not represent, warrant or undertake that any errors on or relating to this website will be corrected or that any server from which this website is operated or will be free from viruses or other harmful components. Except as expressly provided for in these terms, this website and all materials, products and information provided through or on this website are provided to you on an “as is”, "with all faults" basis, and WHOLISTIC does not make or give any representation, warranty or condition or any kind, whether express or implied, written or oral, statutory or otherwise, including and without limitation (i) warranties as to uninterrupted or error-free transactions, privacy, or security, (ii) accuracy, adequacy completeness of information; or (iii) merchantability, quality, title, durability, suitability, non-infringement or fitness for particular purposes, or those arising out of a course of dealing or usage of trade. These exclusions are in addition to any specific exclusion otherwise provided in these terms. Because certain federal, state or provincial laws do not permit the exclusion of certain warranties, these exclusions may not apply to you. You may not act or rely on any information or materials in this website, and in particular, you should not make any investment decisions based on any information or materials on this website. This section shall survive the termination or expiry of this agreement. 
            7. LIMITATION OF LIABILITY To the maximum extent permitted by applicable law, in no event will WHOLISTIC be liable for any damages or losses of any kind, whether direct, indirect, incidental, special, exemplary, punitive, or consequential, howsoever caused, including, but not limited to any lost data, lost profits, lost savings, loss of goodwill, lost business, loss of use or lack of availability of facilities including computer resources, routers and stored data arising out of or in connection with the use of this website, including without limitation the products or information provided through this website, the products, or the website even if WHOLISTIC or any of its lawful agents, contractors, employees, mandataries have been advised of this possibility of such damages or claims. In particular, and without limiting the preceding paragraph, in no event will WHOLISTIC be liable to you for importation or use of the products or any damages or losses resulting from viruses, data corruption, failed messages, damages arising as a result of: transmission errors or problems, telecommunications service providers, WHOLISTIC’s contractor’s, the internet backbone, third-party suppliers of products or services, damages or losses caused by you, or your employees, agents, mandataries, or subcontractors, or other events beyond the reasonable control of WHOLISTIC. If, despite the limitations above, WHOLISTIC is found liable for any damage or loss in connection with this website or your importation or use of the products, in no case will WHOLISTIC’s total liability arising under any cause whatsoever (including without limitation breach of contract, negligence, gross negligence or otherwise) be for more than the amount paid by you for the specific products ordered under this agreement and to which the claim relates. If you are dissatisfied with these terms or this website, your sole and exclusive remedy is to discontinue using and accessing this website. Certain Federal, State or Provincial Laws may not allow limitation on implied warranties or the exclusion or limitation of certain damages. If these laws apply to you, some or all of the above disclaimers, exclusions, or limitations may not apply to you, and you might have additional rights. For the purposes of this section, “WHOLISTIC” and its affiliates shall include WHOLISTIC’s Directors, Officers, Employees, Agents, Mandataries, Contractors and Third-Party Suppliers. Use of this site is unauthorized in any jurisdiction where such use may violate the legal requirements of such jurisdiction and you agree not to access this website in any such jurisdiction. You will be responsible for compliance with all applicable laws. This section shall survive the termination or expiry of this agreement. 8. COPYRIGHTS AND TRADEMARKS Material on this website, including, but not limited to texts, images, illustrations, software, audio clips and video clips, is owned or otherwise provided by WHOLISTIC, and WHOLISTIC does not represent or warrant that such material does not infringe the rights of any other person or entity. The material on this website is protected in Canada and in other jurisdictions by the Copyright Act and by virtue of the applicable international treaties. Consequently, the material on this website may not be copied, reproduced, republished, downloaded, posted, transmitted, distributed or modified, in whole or in part in any form whatsoever, including, but not limited to text, audio or video, without the prior written consent of WHOLISTIC. Trademarks, logos and service marks (collectively, "Marks") displayed on this website are registered or unregistered Marks of WHOLISTIC or others, are the property of their respective owners, and may not be used without written permission of the owner of such Marks. Nothing in this website is to be interpreted as conferring a right to use the Marks or the material protected by the Copyright Act. Notwithstanding the foregoing, WHOLISTIC authorizes you to make one electronic or paper copy of the information posted on any page of this website provided that the copy is used solely for non-commercial, personal purposes, and in each and every case, provided that any such copy remains protected by all copyright, trademarks, service marks and other proprietary notices and legends contained on such website. This license does not include any resale of this website or its contents; any collection of product listings or descriptions; any other derivative use of this website or its contents; any downloading or copying of information for the benefit of any merchant; or any use of data mining, robots, or similar data gathering and extraction tools. You may not frame or utilize framing techniques to enclose any page on this website or any trademark, logo or other proprietary information (including images, text, page layout, or form) of WHOLISTIC without express written consent of WHOLISTIC. You may not use any meta tags or any other "hidden text" utilizing WHOLISTIC's name or trademarks without the express written consent of WHOLISTIC. Any unauthorized use of this website and/or its contents terminates the permission or license granted by WHOLISTIC. Except as otherwise may be expressly provided herein, nothing contained in these Terms shall be construed as conferring by implication, estoppel or otherwise any license or right under any copyright, patent, trademark or other intellectual property right of WHOLISTIC or any other person or entity.
             9. CONFIDENTIALITY OF THE INFORMATION TRANSMITTED Other than your account information, WHOLISTIC does not wish to receive confidential, secret or proprietary information or material from you through this website or by other means. You acknowledge that information or material which you provide electronically through your access to or usage of this website, including, but not limited to, your ideas, suggestions, comments and other feedback regarding your use of this website or the Products, is not, except as may be required under applicable law or pursuant to WHOLISTIC's Privacy Policy, secret, confidential or proprietary. You consent to WHOLISTIC using any such information or material provided, in whole or in part by any means or in any manner whatsoever, including reproducing, retransmitting or publishing this information or material or ideas, concepts or other information contained therein for the commercial purposes of WHOLISTIC or the disclosure of your identity, in accordance with WHOLISTIC's Privacy Policy. Furthermore, you acknowledge that unprotected e-mail communication over the Internet is subject to possible interception, alteration or loss. You also represent and warrant that any and all such information or material which you provide to WHOLISTIC, whether provided by you electronically by accessing or using this website or otherwise, and WHOLISTIC's use of this information and material so provided as permitted in these Terms, does not infringe the rights of any other person or entity.
              10. SURVEILLANCE WHOLISTIC may monitor the access to its websites and other activities in relation to its website and may intervene in this regard. However, WHOLISTIC makes no representation and gives no warranty to that effect. You consent to such surveillance and intervention.
               11. LINKS TO OTHER WEBSITES Links and references to other websites are provided to you as a convenience only. WHOLISTIC has not reviewed and does not expressly or implicitly endorse other websites or any information or material, or the accessibility thereof, via such links. WHOLISTIC does not assume any responsibility for any such other websites, information or material posted thereon, or products or services offered thereon and shall not be liable for any damages or injury arising from that content.
                12. DAMAGE TO OTHERS You agree not to introduce into or through this website or any other WHOLISTIC website any information or materials which may be harmful to others. Among other things, you agree not to include, knowingly or otherwise, any error or defect in material or information which may, among other things, be a libel, slander, defamation or obscenity, or promote hatred or otherwise give rise to a criminal offence or civil liability on the part of any person or entity. 
                13. MODIFICATION OF WEBSITE; RESERVATION OF RIGHTS WHOLISTIC may, for any reason in its sole discretion and without notice to you, terminate, change, suspend or discontinue this website or any aspect of it, and WHOLISTIC will not be liable to you or any third party for doing so. WHOLISTIC may also impose rules for and limits on use of this website or restrict your access to part, or all, of this website without notice or liability. All rights not expressly granted in these terms are reserved to WHOLISTIC. 
                14. ENUREMENT These Terms shall inure to the benefit of and be binding upon each of the parties hereto and their respective successors and permitted assigns. 
                15. GOVERNING LAW This website is controlled and operated in Calgary, Alberta, Canada and these Terms, this website, any use of this website and any transaction conducted on or from it shall be governed by the laws of the Province of Alberta and the laws of Canada applicable therein without reference to principles of conflict of laws. The application of the United Nations Convention on Contracts for the International Sale of Goods is expressly excluded. 
                16. DISPUTE RESOLUTION You hereby acknowledge and agree that any dispute that may arise between you and WHOLISTIC in respect of these Terms and the transactions contemplated herein shall be resolved by the provincial and federal courts, tribunals, agencies and other dispute resolution organizations sitting in Calgary, Alberta, Canada and you hereby irrevocably submit and attorn to the personal and exclusive jurisdiction and venue of these courts.
                 17. SEVERABILITY If any one of these conditions shall be deemed invalid, void, or for any reason unenforceable, such condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition.
              18. JURISDICTION WHOLISTIC makes no representation that materials, information or Products provided on or through this website are appropriate or available for use in other locations or jurisdictions. Those who choose to access this website from other locations or jurisdictions do so on their own initiative and are responsible for compliance with local laws, if and to the extent local laws are applicable. 
              19. COOKIES WHOLISTIC may use "cookies" to track your preferences and activities on the WHOLISTIC website. Cookies are small data files transferred to your computer's hard drive by a website. They keep a record of your preferences making your subsequent visits to the website more efficient. Cookies may store a variety of information, including, the number of times that you access a website, your registration information and the number of times that you view a particular page or other item on the website. The use of cookies is a common practice adopted by most major websites to better serve their clients. Most browsers are designed to accept cookies, but they can be easily modified to block cookies; see your browser's help files for details on how to block cookies, how to know when you have received cookies and how to disable cookies completely. You should note, however, that without cookies, some of the website's functions will not be available, and the user will lose some of the benefits of the website. 
              20. NO WAIVER The failure of WHOLISTIC to enforce any provisions of these Terms or to respond to a breach by you or any third party of these Terms shall not in any way waive the right of WHOLISTIC to subsequently enforce any of the terms and conditions contained herein or to act with respect to similar breaches.
               21. EXPORT LAWS Products sold or delivered under these Terms shall be subject to export control laws and regulations of Canada. You agree to comply at all times with all such laws and regulations. You hereby agree to defend and hold WHOLISTIC harmless against all claims, damages or liability resulting from breach of the foregoing. 
               22. ENTIRE AGREEMENT These Terms, together with all other agreements, terms or conditions incorporated or referred to herein constitute the entire agreement between you and WHOLISTIC with respect to the use of this website and any transaction conducted on or from this website and its contents, and supersede any prior understandings or agreements (whether electronic, oral or written) regarding the subject matter hereof, and may not be amended or modified except in writing, or by WHOLISTIC making such amendments or modifications available to it pursuant to the terms hereof. 
               23. NO ASSIGNMENT You may not assign your rights or obligations herein without the express written consent of WHOLISTIC. 
               24. TERMINATION WHOLISTIC reserves the right, at its sole discretion, to terminate your access to all or any part of this website, with or without notice. 
               25. HEADINGS The headings used herein are inserted for convenience of reference only and do not affect the construction or interpretation of the terms and conditions herein. Copyright © by WHOLISTIC 2022</p>
</div>
       
</div>







    </body> -->
</main><!-- #main -->
<?php
get_footer();