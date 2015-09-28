jquery=$;

jquery(document).ready(
        function ()
        {

            jquery('#profile').click(
                    function ()
                    {
                        jquery('#show_pro').toggle();
                        jquery('#edit_pro').toggle();
                    }
            );
        }
);