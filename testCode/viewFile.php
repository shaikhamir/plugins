<!doctype html>
<html>

<head>
    <title>Griddish Plugin</title>
    <link href="../common-files/common.css" type="text/css" rel="stylesheet" />
    <link href="../griddish/helper.css" type="text/css" rel="stylesheet" />
    <style>
        .griddish_template {
            display: none;
        }

        .onEdit {
            display: none;
        }

        .editBtn,
        .saveBtn,
        .deleteBtn,
        .cancelEditBtn {
            cursor: pointer;
        }

        input {
            height: 30px;
            padding: 5px;
            width: 100%;
        }

    </style>
</head>

<body>
    <div class="container">
        <h2>Simple Usage of Griddish Plugin</h2>
        <hr/>
    </div>
    <div class="container p-x">
        <div id="griddishDemo">
            <div class="btn-row">
                <button type="button" id="addNew">Add New <big>+</big></button>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Email Id</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="griddish_body">

                </tbody>
            </table>
            <table class="griddish_template">
                <tbody>
                    <tr class="griddish_div">
                        <td>
                            <span data-gridData="srNo"></span>
                        </td>
                        <td>
                            <span data-gridData="name" class="onView"></span>
                            <input type="text" class="onEdit" data-gridValue="name" />
                        </td>
                        <td>
                            <span data-gridData="email" class="onView"></span>
                            <input type="text" class="onEdit" data-gridValue="email" />
                        </td>
                        <td>
                            <span data-gridData="phone" class="onView"></span>
                            <input type="text" class="onEdit" data-gridValue="phone" />
                        </td>
                        <td>
                            <span data-gridData="address" class="onView"></span>
                            <input type="text" class="onEdit" data-gridValue="address" />
                        </td>
                        <td>
                            <a class="editBtn onView">Edit</a>
                            <a class="deleteBtn onView"> | Remove</a>
                            <a class="saveBtn onEdit">Save</a>
                            <a class="cancelEditBtn onEdit"> | Cancel</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../common-files/jquery.min.js"></script>
    <script src="../griddish/griddish.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            var testData = [{
                "name": "Amir Shaikh",
                "email": "amirshaikh@gmail.com",
                "phone": "+91-9594178722",
                "address": "Thane, Maharashtra",
            }, {
                "name": "Tushar Warghade",
                "email": "tusharwarghade@gmail.com",
                "phone": "+91-9892147789",
                "address": "Badlapur, Maharashtra",
            }, {
                "name": "Imad Solkar",
                "email": "imadsoulkar@gmail.com",
                "phone": "+91-7749897654",
                "address": "Mumbai, Maharashtra",
            }, {
                "name": "Kashif Sayyed",
                "email": "kashifsayyed@gmail.com",
                "phone": "+91-9930119956",
                "address": "Mumbai, Maharashtra",
            }];

            var fillGrid = function(grid) {
                for (var i = 0; i < testData.length; i++) {
                    var newRow = grid.newRow();

                    grid.addRow(newRow);

                    var rowID = i + 1;
                    grid.setRowId(newRow, rowID);

                    var srNo = i + 1;
                    newRow.setText("srNo", srNo);

                    newRow.setText("name", testData[i].name);
                    newRow.setInputVal("name", testData[i].name);

                    newRow.setText("email", testData[i].email);
                    newRow.setInputVal("email", testData[i].email);

                    newRow.setText("phone", testData[i].phone);
                    newRow.setInputVal("phone", testData[i].phone);

                    newRow.setText("address", testData[i].address);
                    newRow.setInputVal("address", testData[i].address);
                }
            }

            // Simple Usage
            $("#griddishDemo").griddish({
                onInit: function(grid) {
                    fillGrid(grid);
                    console.log(grid.getRow());
                },
                addNewBtn: "#addNew",
                onSave: function(grid){
                    submitData(grid);
                }
            });
        });

    </script>
</body>

</html>
