<center class="wrapper">
    <table class="top-panel center" width="602" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="title" width="300">Ricky Joby Contractors</td>
            <td class="subject" width="300"><a class="strong" href="https://rjobycontractors.com/" target="_blank">www.rjobycontractors.com</a></td>
        </tr>
        <tr>
            <td class="border" colspan="2">&nbsp;</td>
        </tr>
        </tbody>
    </table>

    <div class="spacer">&nbsp;</div>

    <table class="main center" width="602" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="column">
                <div class="column-top">&nbsp;</div>
                <table class="content" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                    <tr>
                        <td class="padded">
                          <h1>{{ $inspect->product->title }} is requested for Review</h1>
                      
                          <a class="strong" href="{{ route('web.propertydetails', ['slug' => $inspect->product->slug ])}}" target="_blank">See Requested Property Details</a>
                          <p>Person Requesting</p>
                          <table style="width:100%">
                          <tr>
                            <td><strong>Name</strong></td>
                            <td>{{ $inspect->name }}</td>
                          </tr>
                          <tr>
                            <td><strong>Email<strong></td>
                            <td>{{ $inspect->email }}</td>
                          </tr>
                          <tr>
                            <td><strong>Phone</strong></td>
                            <td>{{ $inspect->phone }}</td>
                          </tr>
                          <tr>
                            <td><strong>Address</strong></td>
                            <td>{{ $inspect->address }}</td>
                          </tr>

                          <tr>
                            <td><strong>Message</strong></td>
                            <td>{{ $inspect->msg }}</td>
                          </tr>
                        </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="column-bottom">&nbsp;</div>
            </td>
        </tr>
        </tbody>
    </table>

    <div class="spacer">&nbsp;</div>

    <table class="footer center" width="602" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td class="border" colspan="2">&nbsp;</td>
        </tr>
   
        </tbody>
    </table>
</center>