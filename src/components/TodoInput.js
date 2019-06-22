import React from "react"
import Axios from 'axios'
export default class TodoInput extends React.Component {

    /**
 * SHOW ALL
 */
    constructor(props) {
        super(props);
        this.state = {
            post_titles: []
        }
    }

    async componentDidMount() {
        const {data} = await Axios.get('http://localhost/wordpress/wp-json/project_manager/v1/manager')
        this.setState({post_titles: data})

    }

    /**
 * DELETE
 */

    state = {
        id: ''
    }

    handleSubmitDelete = event => {
        event.preventDefault();
        console.log(event);
        Axios
            .delete(`http://localhost/wordpress/wp-json/project_manager/v1/manager/` + event.target.id)
            .then(res => {
                console.log(res);
                console.log(res.data);
                console.log(this.state.id);
            })
    }

    /**
 * CREATE
 */
    state = {
        post_title: '',
        post_content: ''
    }

    handleChangeTitle = event => {
        this.setState({post_title: event.target.value});
        console.log(event)
    }

    handleChangeContent = event => {
        this.setState({post_content: event.target.value});
        console.log(event)
    }

    handleSubmitAdd = event => {
        event.preventDefault();

        Axios
            .post(`http://localhost/wordpress/wp-json/project_manager/v1/manager`, {
            post_title: this.state.post_title,
            post_content: this.state.post_content
        })
            .then(res => console.log(res.data));
    }

    /**
     * UPDATE
     */

    handleChangeUpdateTitle = event => {
        this.setState({post_title: event.target.value});
        console.log(event)
    }

    handleChangeUpdateContent = event => {
        this.setState({post_content: event.target.value});
        console.log(event)
    }

    handleSubmitUpdate = event => {
        event.preventDefault();

        Axios.put(`http://localhost/wordpress/wp-json/project_manager/v1/manager/update/` + event.currentTarget.id, {
            post_title: this.state.post_title,
            post_content: this.state.post_content
        })
    }

    render() {
        return (
            <div className="taskManager">
                <div className="list">
                    <h2>Nouvelle tâche</h2>
                    <form className="w-50" onSubmit={this.handleSubmitAdd}>
                        <input
                            className="addInput"
                            type="text"
                            name="post_title"
                            onChange={this.handleChangeTitle}
                            placeholder="Insérer le titre de la nouvelle tâche"/>
                        <input
                            className="addInput"
                            type="text"
                            name="post_content"
                            onChange={this.handleChangeContent}
                            placeholder="Insérer la description de la nouvelle tâche"/>
                        <button className="btn btn-primary" type="submit">
                            Ajouter
                        </button>
                    </form>
                </div>
                <div className="flex">

                    {this
                        .state
                        .post_titles
                        .map(post_title => (

                            <div key={post_title.ID} className="list">
                                <div className="tacheInfos">
                                  <h2 className="underline">Tâche - {post_title.ID}</h2>
                                  <h3>Titre: {post_title.post_title}</h3>
                                  <h3>Description:</h3><p className="descTache">{post_title.post_content}</p>
                                </div>
                                <h3>Modifier la tâche</h3>
                                <form className="w-50" id={post_title.ID} onSubmit={this.handleSubmitUpdate}>
                                    <input
                                        className="addInput"
                                        type="text"
                                        name="post_title"
                                        onChange={this.handleChangeUpdateTitle}
                                        placeholder="Insérer le titre de la nouvelle tâche"/>
                                    <input
                                        className="addInput"
                                        type="text"
                                        name="post_content"
                                        onChange={this.handleChangeUpdateContent}
                                        placeholder="Insérer la description de la nouvelle tâche"/>

                                    <button className="btn btn-primary" type="submit">
                                        Update
                                    </button>
                                    <button
                                        className="deleteTask"
                                        id={post_title.ID}
                                        onClick={this.handleSubmitDelete}>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        ))}

                </div>
            </div>
        )
    }
}
